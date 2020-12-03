<?php

class ModelExtensionMtaMtaAffiliate extends MtaScheme {

	public function addOrder($order_id, $data) {
		$aff_id = $this->findCurrentAff($data);
		if(!$aff_id) return;
		$after_shipping_codes = array('handling', 'low_order_fee', 'shipping', 'tax');
		$aff_shipping = 0;
		$aff_info = $this->cart->aff_info;		
		$aff_info['price'] = $data['total'];
					
		foreach($data['totals'] as $t) {
			if($t['code'] == 'coupon' && isset($t['product_ids']) && $t['value'] < 0) {
				$_coupon_product_ids = $t['product_ids'];
				$_coupon_id = $t['coupon_id'];						
				if(!sizeof($_coupon_product_ids)) $_coupon_product_ids = array_keys($aff_info['products']);
				foreach($_coupon_product_ids as $_cpid) {
					if(!is_string($_cpid)) $_cpid = strval($_cpid);
					if(isset($aff_info['products'][$_cpid])) $aff_info['products'][$_cpid]['mods']['coupon'] = $_coupon_id;
				}
						
			}
			
			if((($this->config->get('mta_ypx_no_shipping') && $t['code'] != 'sub_total' && $t['code'] != 'total') || in_array($t['code'], $after_shipping_codes)) && $t['value'] > 0) $aff_shipping += $t['value'];					
		}
		
		$aff_info['price_before_shipping'] = $this->config->get('mta_ypx_no_shipping') && $this->config->get('mta_ypx_no_shipping') == 'subtotal' ? $this->cart->getSubTotal() : $aff_info['price'] - $aff_shipping;		
		
		$aff_data = $this->prepareCommissions($aff_id, $aff_info);
		if(!$aff_data) return;
		
		if(isset($aff_data['order'][0]['affiliate_id']) && $aff_data['order'][0]['commission'] > 0) $this->db->query("UPDATE `" . DB_PREFIX . "order` SET affiliate_id = '" . (int)$aff_data['order'][0]['affiliate_id'] . "', commission = '" . (float)$aff_data['order'][0]['commission'] . "' WHERE order_id = '" . (int)$order_id . "'");
		
		$this->createOrder($order_id, $aff_data);		
	}
	
	public function deleteOrder($order_id) {
		$res = $this->db->query("SELECT mta_order_id FROM " . DB_PREFIX . "mta_order WHERE order_id = '" . (int)$order_id . "'");
		$_mtaids = array();
		foreach($res->rows as $r) {
			$_mtaids[] = "'" . (int)$r['mta_order_id'] . "'";
		}
		if(sizeof($_mtaids) > 0) $this->db->query("DELETE FROM " . DB_PREFIX . "mta_order_product WHERE mta_order_id IN (" . implode(',', $_mtaids) . ")");
		$this->db->query("DELETE FROM " . DB_PREFIX . "mta_order WHERE order_id = '" . (int)$order_id . "'");
	}	
	
	public function editOrder($order_id, $data) {		
		if(!isset($data['customer_id'])) {
			$_res = $this->db->query("SELECT customer_id FROM `" . DB_PREFIX . "order` WHERE order_id = '" . (int)$order_id . "'");
			$data['customer_id'] = $_res->row['customer_id'];
		}
		$this->deleteOrder($order_id);
		$this->addOrder($order_id, $data);	
	}	
	
	public function findCurrentAff($data = array()) {
		$aff_id = false;		
		//if(isset($data['affiliate_id']) && $data['affiliate_id'] && $this->check_aff_active($data['affiliate_id'])) {	//addOrder內用來判斷是否有上一層的函數，這邊取消對帳號是否啟用的檢查
		if(isset($data['affiliate_id']) && $data['affiliate_id']) {
			$aff_id = $data['affiliate_id'];
			if(isset($data['customer_id']) && $data['customer_id']) {
				$this->setCustomerAffiliateId($data['customer_id'], $aff_id);
				if ($this->customer->isLogged() == $data['customer_id'] && !$this->config->get('mta_ypx_no_aff_in_cust_acc') && (!defined('MTA_YPX_NO_AFF_IN_CUST_ACC') || !MTA_YPX_NO_AFF_IN_CUST_ACC)) {
					$this->load->model('account/customer');
					$affiliate_info = $this->model_account_customer->getAffiliate($aff_id);
					if ($affiliate_info) {
						$_exp = $this->config->get('mta_ypx_expire');
						$tracking_cookie_expire = $_exp ? time() + 86400 * $_exp : 0;
						setcookie('tracking', $affiliate_info['tracking'], $tracking_cookie_expire, '/');	
					} else {
						$aff_id = false;
					}
				}
			}
		}
		if($aff_id) return $aff_id;
		if (((isset($data['customer_id']) && $data['customer_id']) || $this->customer->isLogged()) && !$this->config->get('mta_ypx_no_aff_in_cust_acc') && (!defined('MTA_YPX_NO_AFF_IN_CUST_ACC') || !MTA_YPX_NO_AFF_IN_CUST_ACC)) {
			if(!isset($data['customer_id']) || !$data['customer_id']) {
				$customer_id = $this->customer->isLogged();
				$clogged = true;
			} else {
				$customer_id = $data['customer_id'];
				$clogged = $customer_id == $this->customer->isLogged();
			}
			$aff_id = $this->getCustomerAffiliateId($customer_id, 'active_only');
			if($aff_id && $clogged) {
				$this->load->model('account/customer');
				$affiliate_info = $this->model_account_customer->getAffiliate($aff_id);
				if ($affiliate_info) {
					if(isset($this->request->cookie['tracking']) || isset($this->session->data['tracking'])) {
						$_tracking = isset($this->session->data['tracking']) ? $this->session->data['tracking'] : $this->request->cookie['tracking'];
						if(!$this->config->get('mta_ypx_db_perm') && $_tracking != $affiliate_info['tracking']) $aff_id = false;
					}					
					if($aff_id) {
						$_exp = $this->config->get('mta_ypx_expire');
						$tracking_cookie_expire = $_exp ? time() + 86400 * $_exp : 0;
						setcookie('tracking', $affiliate_info['tracking'], $tracking_cookie_expire, '/');	
					}
				} else {
					$aff_id = false;
				}
			}
		}	
		
		if (!$aff_id && (isset($this->request->cookie['tracking']) || isset($this->session->data['tracking']))) {
			$_tracking = isset($this->session->data['tracking']) ? $this->session->data['tracking'] : $this->request->cookie['tracking'];
			$this->load->model('account/customer');
				
			$affiliate_info = $this->model_account_customer->getAffiliateByTracking($_tracking);
				
			if ($affiliate_info) {
				$aff_id = $affiliate_info['customer_id'];
				if($this->customer->isLogged()) $this->setCustomerAffiliateId($this->customer->getId(), $aff_id);
				/*
				//當cookie內有追蹤碼時，檢查擁有此追蹤碼的會員是否active(用處待測試)
				if(!$this->check_aff_active($aff_id)) {
					$aff_id = false;
				} else {
					if($this->customer->isLogged()) $this->setCustomerAffiliateId($this->customer->getId(), $aff_id);					
				}
				*/
			}
		}		
		return $aff_id;
	}	
	
	public function findParentByEmail($email, $active_only = false) {
		$res = $this->db->query("SELECT mta_c.parent_affiliate_id AS affiliate_id FROM " . DB_PREFIX . "customer c, " . DB_PREFIX . "mta_customer mta_c WHERE mta_c.customer_id =c.customer_id AND c.email='" . $this->db->escape($email) . "' AND mta_c.parent_affiliate_id > 0 ORDER BY c.customer_id ASC LIMIT 1");
		if($res->num_rows < 1 || ($active_only && !$this->check_aff_active($res->row['affiliate_id']))) return false;	
		return $res->row['affiliate_id'];
	}
	
	public function find_parent() {		
		if (isset($this->request->cookie['tracking'])) {
			$this->load->model('account/customer');				
			$res = $this->model_account_customer->getAffiliateByTracking($this->request->cookie['tracking']);

			/* 註冊時改為不檢查追蹤碼擁有者是否active */
			if($res) return $res['customer_id'];
			//if($res && $this->check_aff_active($res['customer_id'])) return $res['customer_id'];
		}			
		if ($this->customer->isLogged()) {
			$_aff_id = $this->getCustomerAffiliateId($this->customer->getId(), 'active_only');
			if($_aff_id) return $_aff_id;
		}			
		if(isset($this->request->post['email']) && $this->request->post['email']) return $this->findParentByEmail($this->request->post['email'], 'active_only');
		return false;				
	}	
	
	public function addAffiliate($id, $parent_id, $scheme_signup_code = '', $scheme_id = false) {
		if(!mta_check_int($id) || $id < 1) return false;
		$aff = array('id' => $id);
		$parent = $parent_id ? $this->getAffiliate($parent_id) : false;
		if($parent) {
			$aff['level_original'] = ((int) $parent['level_original']) + 1;
			$aff['parent_affiliate_id'] = $parent['id'];
			$aff['parents'] = $parent['parents'];
			array_unshift($aff['parents'], $parent['id']);
			$aff['all_parent_ids'] = implode(',', $aff['parents']);
		} else {
			$aff['level_original'] = 1;
			$aff['parent_affiliate_id'] = 0;
			$aff['parents'] = array();
			$aff['all_parent_ids'] = '';
		}
		if($scheme_id && $this->_checkId($scheme_id)) {
			$scheme = $this->getSchemeById($scheme_signup_code);
		} else if($scheme_signup_code) {
			$scheme = $this->getSchemeByCode($scheme_signup_code);
		}
		
		if(isset($scheme) && $scheme && isset($scheme['id']) && $scheme['id'] && !isset($scheme['error'])) {
			$aff['scheme_id'] = $scheme['id'];
		} else if($this->config->get('mta_ypx_explicit_default')) {
			$scheme = $this->getSchemeById($this->getDefaultSchemeId());
			$aff['scheme_id'] = $scheme['id'];
		} else {
			$aff['scheme_id'] = null;
		}
		
		$query = "INSERT " . DB_PREFIX . "mta_affiliate SET affiliate_id='" . $aff['id'] . "'";
		if(!is_null($aff['scheme_id'])) $query .= ", mta_scheme_id='" . $aff['scheme_id'] . "'";
		$query .= ", parent_affiliate_id='" . $aff['parent_affiliate_id'] . "', all_parent_ids='" . $this->db->escape($aff['all_parent_ids']) . "', level_original='" . $aff['level_original'] . "'";		
		$this->db->query($query);
		if(!$this->db->countAffected()) return false;
		
		//autoapprove?
		$_scheme_id = !is_null($aff['scheme_id']) ? $aff['scheme_id'] : $this->getDefaultSchemeId();
		if($_scheme_id) {
			$res = $this->db->query("SELECT MAX(signup_level) AS mx from " . DB_PREFIX. "mta_autoapprove WHERE mta_scheme_id='" . $_scheme_id . "'");
			if($res->num_rows > 0) {
				$_lvl  = $aff['level_original'] > $res->row['mx'] ? $res->row['mx'] : $aff['level_original'];
				$res = $this->db->query("SELECT autoapprove FROM " . DB_PREFIX. "mta_autoapprove WHERE mta_scheme_id='" . $_scheme_id . "' AND signup_level='" . $_lvl . "'");
				if($res->row['autoapprove']) $this->db->query("UPDATE `" . DB_PREFIX . "customer_affiliate` SET status = '1' WHERE customer_id = '" . $aff['id'] . "'");
				$this->db->query("DELETE FROM `" . DB_PREFIX . "customer_approval` WHERE customer_id = '" . $aff['id'] . "' AND `type` = 'affiliate'");
			}
		}
		return $aff;
	}
	
	public function getAffiliate($id) {
		if(!mta_check_int($id) || $id < 1) return false;
		$res = $this->db->query("SELECT affiliate_id AS id, mta_scheme_id AS scheme_id, parent_affiliate_id, all_parent_ids, level_original FROM " . DB_PREFIX . "mta_affiliate WHERE affiliate_id='" . $this->db->escape($id) . "'");
		if($res->num_rows < 1) return false;
		$out = $res->row;
		$out['parents'] = $out['all_parent_ids'] ? array_map('intval', explode(',', $out['all_parent_ids'])) : array();
		if($this->customer->getId() != $id){
			return $out;
		}else{
			return $this->getAffiliate($out['parent_affiliate_id']);
		}
	}	
	
	public function getTotalEarnings() {
		$transaction_table = DB_PREFIX . ($this->config->get('module_aff_classic_status') && $this->config->get('module_aff_classic_commission_table') ? 'customer_affiliate_transaction' : 'customer_transaction');
		$query = $this->db->query("SELECT SUM(amount) AS total FROM " . $transaction_table . " WHERE customer_id = '" . (int)$this->customer->getId() . "' AND amount > 0 GROUP BY customer_id");
		
		if ($query->num_rows) {
			return $query->row['total'];
		} else {
			return 0;	
		}
	}	
	
	public function getAffiliateIdByEmail($email) {		
		$res = $this->db->query("SELECT c.customer_id FROM " . DB_PREFIX . "customer c, " . DB_PREFIX . "customer_affiliate ca WHERE c.email='" . $this->db->escape($email) . "' AND ca.customer_id = c.customer_id AND c.status = '1' AND ca.status = '1'");
		if($res->num_rows < 1) return false;
		return $res->row['customer_id'];
	}
	
	public function getCustomerAffiliateId($customer_id, $active_only = false) {
		if(!mta_check_int($customer_id) || $customer_id < 1) return false;
		$res = $this->db->query("SELECT parent_affiliate_id AS affiliate_id FROM " . DB_PREFIX . "mta_customer WHERE customer_id='" . (int) $customer_id . "'");
		if($res->num_rows < 1 || !$res->row['affiliate_id']) return false;
		$aff_id = $this->getAcccAffiliateId($customer_id, $res->row['affiliate_id']);
		if(!$aff_id || ($active_only && !$this->check_aff_active($aff_id))) return false;
		return intval($aff_id);		
	}
	
	protected function getAcccAffiliateId($customer_id, $affiliate_id) {
		$aff = $this->getAffiliate($customer_id);
		if(!$aff || !$aff['parent_affiliate_id']) return $affiliate_id;
		return $aff['parent_affiliate_id'];
	}
	
	public function setCustomerAffiliateId($customer_id, $affiliate_id, $force = false) {
		if(!mta_check_int($customer_id) || $customer_id < 1 || !mta_check_int($affiliate_id) || $affiliate_id < 1 || ($force === false && $this->config->get('mta_ypx_db_perm'))) return false;
		$affiliate_id = $this->getAcccAffiliateId($customer_id, $affiliate_id);
		if(!$affiliate_id) return false;		
		$this->db->query("REPLACE INTO " . DB_PREFIX . "mta_customer (customer_id, parent_affiliate_id) VALUES ('" . $customer_id . "', '" . $affiliate_id . "')");
		return intval($affiliate_id);		
	}	
	
	public function createOrder($order_id, $aff_data) {
		//echo '1 $aff_data: ' . print_r($aff_data, 1);//-tmp
		$mta_order_ids = array();
		$this->db->query('START TRANSACTION');
		$_res = $this->db->query("SELECT mta_order_id FROM " . DB_PREFIX . "mta_order WHERE order_id='" . (int) $order_id . "'");
		if($_res->num_rows > 0) {
			$_moids = array();
			foreach($_res->rows as $_r) {
				$_moids[] = $_r['mta_order_id'];
			}
			$this->db->query("DELETE FROM " . DB_PREFIX . "mta_order_product WHERE mta_order_id IN (" . implode(',', $_moids) . ")");			
			$this->db->query("DELETE FROM " . DB_PREFIX . "mta_order WHERE order_id='" . (int) $order_id . "'");
		}
		foreach($aff_data['order'] as $_o) {
			if($_o['commission'] < 0.01) continue;
			$this->db->query("DELETE FROM " . DB_PREFIX . "mta_order WHERE affiliate_id='" . $_o['affiliate_id'] . "' AND order_id='" . (int) $order_id . "'");
			$this->db->query("INSERT INTO " . DB_PREFIX . "mta_order (order_id, affiliate_id, commission, autoadd) VALUES ('" . (int) $order_id . "', '" . $_o['affiliate_id'] . "', '" . mta_float4($_o['commission']) . "', '" . (int) $_o['autoadd'] . "')");
			$mta_order_ids[$_o['affiliate_id']] = $this->db->getLastId();
		}

		if(sizeof($mta_order_ids) > 0) $this->db->query("DELETE FROM " . DB_PREFIX . "mta_order_product WHERE mta_order_id IN (" . implode(',', array_values($mta_order_ids)) . ")");
		foreach($aff_data['order_product'] as $product_id => $_ar) {
			$_res = $this->db->query("SELECT order_product_id FROM " . DB_PREFIX . "order_product WHERE order_id='" . (int) $order_id . "' and product_id='" . $product_id . "'");
			if($_res->num_rows > 0) {
				$_order_product_id = $_res->row['order_product_id'];
				foreach($_ar as $_aff_id => $_op) {
					if($_op['commission'] < 0.01) continue;
					$this->db->query("DELETE FROM " . DB_PREFIX . "mta_order_product WHERE affiliate_id='" . $_aff_id . "' AND order_product_id='" . $_order_product_id . "'");
					$this->db->query("INSERT INTO " . DB_PREFIX . "mta_order_product (mta_order_id, product_id, order_product_id, affiliate_id, commission, mta_scheme_id, num_levels, level, autoadd) VALUES ('" . $mta_order_ids[$_aff_id] . "', '" . $product_id . "', '" . $_order_product_id . "', '" . $_aff_id . "', '" . mta_float4($_op['commission']) . "', '" . $_op['mta_scheme_id'] . "', '" . $_op['num_levels'] . "', '" . $_op['level'] . "', '" . (int) $_op['autoadd'] . "')");
				}
			}
		}	
		$this->_commit();
	}
	
	public function prepareCommissions($aff_id, $aff_info) {
		//echo '2 $aff_info ' . print_r($aff_info, 1) . '<br/>';//-tmp
		$aff_data = array('order' => array(), 'order_product' => array());
		$scheme_ids = array('products' => array());
		$aff = $this->getAffiliate($aff_id);
		if(!$aff) return false;
		$all_aff_ids = $aff['parents'];
		array_unshift($all_aff_ids, intval($aff['id']));
		/* 不進行檢查
		$active_ids = array();
		for($_i = 0; $_i < sizeof($all_aff_ids); $_i++){
			if($this->check_aff_active($all_aff_ids[$_i])) $active_ids[] = $all_aff_ids[$_i];
			//if(!$this->check_aff_active($all_aff_ids[$_i])) unset($all_aff_ids[$_i]); //迴圈中unset正在處理的迴圈，索引會有問題
		}
		*/
		$all_aff_ids = array_values($all_aff_ids);
		$num_tiers = sizeof($all_aff_ids);
		if(!$num_tiers) return false;
		$all_aff_index = range(0, ($num_tiers - 1));
		if($this->config->get('mta_ypx_llaff_priority')) $all_aff_index = array_reverse($all_aff_index);		
		
		$mod_types = array('coupon', 'special', 'discount');
		foreach($aff_info['products'] as $product_id => $_pAr) {
			$product_id = (int) $product_id;
			//find correct mod type
			$mod_type = '';
			$mod_type_id = 0;
			foreach($mod_types as $_mtype) {
				if(isset($_pAr['mods'][$_mtype])) {
					$mod_type = $_mtype;
					$mod_type_id = $_pAr['mods'][$_mtype];
					break;
				}
			}
			//look for product / affiliate scheme
			$res = $this->db->query("SELECT mpa.mta_scheme_id, mpa.affiliate_id, ms.max_levels, ms.eternal FROM " . DB_PREFIX . "mta_product_affiliate mpa, " . DB_PREFIX . "mta_scheme ms WHERE mpa.affiliate_id IN (" . implode(',', $all_aff_ids) . ") AND mpa.product_id='" . $product_id . "' AND mpa.price_mod_type='" . $mod_type . "' AND mpa.price_mod_id='" . (int) $mod_type_id . "' AND ms.mta_scheme_id=mpa.mta_scheme_id");
			if($res->num_rows > 0) {
				$_ar = array();
				$_scl = array();
				foreach($res->rows as $_r) {
					$_ar[intval($_r['affiliate_id'])] = intval($_r['mta_scheme_id']);
					$_scl[intval($_r['mta_scheme_id'])] = array($_r['max_levels'], $_r['eternal']);
				}
				for($_i = 0; $_i < $num_tiers; $_i++) {
				//foreach($all_aff_ids as $_aid) {
					$_aid = $all_aff_ids[$all_aff_index[$_i]];
					if(isset($_ar[$_aid])) {					
						//product / affiliate scheme found
						$scheme_ids['products'][$product_id] = $_ar[$_aid];
						$_affids = array_merge(array(), $all_aff_ids);
						$this->_fitAffs($_affids, $_scl[$_ar[$_aid]][0], $_scl[$_ar[$_aid]][1]);
						//if(!$this->config->get('mta_ypx_llaff_priority') || $all_aff_index[$_i] < $_scl[$_ar[$_aid]]) break;
						if(in_array($_aid , $_affids)) break;
					}
				}
				if(isset($scheme_ids['products'][$product_id]))	continue;
			}
			//product / affiliate scheme not found
			//look for product scheme
			$res = $this->db->query("SELECT mta_scheme_id FROM " . DB_PREFIX . "mta_product WHERE product_id='" . $product_id . "' AND price_mod_type='" . $mod_type . "' AND price_mod_id='" . (int) $mod_type_id . "'");
			if($res->num_rows > 0) {
				//product scheme found
				$scheme_ids['products'][$product_id] = intval($res->row['mta_scheme_id']);
				continue;
			}
		}
		//check if all products assigned product-specific commissions
		$_pids = array_map('intval', array_keys($aff_info['products']));
		$_sids = array_keys($scheme_ids['products']);
		$not_assigned = array_diff($_pids, $_sids);

		if(sizeof($not_assigned) > 0) {
			$scheme_id_not_assigned = 0;
			$not_assigned = array_values($not_assigned);
			//not all products assigned product-specific commissions
			//look for affiliate-specific commissions
			$res = $this->db->query("SELECT ma.mta_scheme_id, ma.affiliate_id, ms.max_levels, ms.eternal FROM " . DB_PREFIX . "mta_affiliate ma, " . DB_PREFIX . "mta_scheme ms WHERE ma.affiliate_id IN (" . implode(',', $all_aff_ids) . ") AND ms.mta_scheme_id=ma.mta_scheme_id");
			if($res->num_rows > 0) {
				$_ar = array();
				$_scl = array();
				foreach($res->rows as $_r) {
					$_ar[intval($_r['affiliate_id'])] = intval($_r['mta_scheme_id']);
					$_scl[intval($_r['mta_scheme_id'])] = array($_r['max_levels'], $_r['eternal']);
				}
				for($_i = 0; $_i < $num_tiers; $_i++) {
				//foreach($all_aff_ids as $_aid) {
					$_aid = $all_aff_ids[$all_aff_index[$_i]];
					if(isset($_ar[$_aid])) {
						//affiliate-specific scheme found
						$scheme_id_not_assigned = $_ar[$_aid];
						$_affids = array_merge(array(), $all_aff_ids);
						$this->_fitAffs($_affids, $_scl[$_ar[$_aid]][0], $_scl[$_ar[$_aid]][1]);
						//if(!$this->config->get('mta_ypx_llaff_priority') || $all_aff_index[$_i] < $_scl[$_ar[$_aid]]) break;
						if(in_array($_aid, $_affids)) break;
					}
				}				
			}
			//if no affilite-specific scheme - use default
			if(!$scheme_id_not_assigned) $scheme_id_not_assigned = $this->getDefaultSchemeId();
			
			foreach($not_assigned as $_napid) {
				$scheme_ids['products'][$_napid] = $scheme_id_not_assigned;
			}			
		}
		//now we have mta_scheme_id for every product in $scheme_ids	
		foreach($aff_info['products'] as $product_id => $_pAr) {	
			$share = $_pAr['share'];
			$scheme_id = $scheme_ids['products'][intval($product_id)];
			$scheme = $this->getSchemebyId($scheme_id);
			if(!$scheme || !$scheme['id'] || isset($scheme['error'])) return false;
			$_price = $scheme['before_shipping'] ? $aff_info['price_before_shipping'] : $aff_info['price'];	
			$_pricep = $_price * $_pAr['share'];
			if($scheme['commission_type'] == 'fixed') {
				$aff_data['order_product'][$product_id] = $this->_calculateCommissions($scheme, $all_aff_ids, $_price, $_pAr['quantity']);
			} else {				
				$aff_data['order_product'][$product_id] = $this->_calculateCommissions($scheme, $all_aff_ids, $_pricep);
			}			
		}
		foreach($all_aff_ids as $_aff_id) {
			$_ar = array();
			foreach($aff_data['order_product'] as $product_id => $_comms) {
				if(isset($_comms[$_aff_id])) {
					if(!isset($_ar['commission'])) {
						$_ar['affiliate_id'] = $_aff_id;
						$_ar['commission'] = 0.00;
						$_ar['autoadd'] = false;
					}
					$_ar['commission'] += $_comms[$_aff_id]['commission'];
					if($_ar['autoadd'] === false && $_comms[$_aff_id]['autoadd']) $_ar['autoadd'] = true;
				}
			}
			if(sizeof($_ar) > 0) $aff_data['order'][] = $_ar;
		}					
		//echo '3 $aff_data ' . print_r($aff_data, 1);//-tmp
		return $aff_data;
	}
	
	private function _fitAffs(&$aff_ids, $max_levels, $eternal) {
		$num_affs = sizeof($aff_ids);
		if($num_affs > $max_levels) {
			//more affs than in scheme - determine which affs
			$num_levels = $max_levels;
			if($eternal) {				
				//if eternal commission - incl. affs form higher levels
				$_end = array_slice($aff_ids, -$eternal);
				$_start = $num_levels > $eternal ? array_slice($aff_ids, 0, ($num_levels - $eternal)) : array();
				$aff_ids = array_values(array_merge($_start, $_end));
			} else {
				$aff_ids = array_slice($aff_ids, 0, $num_levels);
			}
		} else {
			$num_levels = $num_affs;
		}
		return $num_levels;
	}
	
	private function _calculateCommissions(&$scheme, $aff_ids, $price = null, $quantity = 1) {
		$num_levels = $this->_fitAffs($aff_ids, $scheme['max_levels'], $scheme['eternal']);		
		$comms = $scheme['_commissions'][$num_levels - 1];
		$aff_ids = array_reverse($aff_ids);//get affs in correct order (higher to lower)
		$out = array();
		//echo print_r($aff_ids, 1) . '<br/>';
		//echo '4 $comms: ' . print_r($comms, 1) . '<br/>';//-tmp
		//echo ' price ' . $price . '<br/>';//-tmp
		if($scheme['commission_type'] == 'fixed') {
			$_csum = array_sum($comms);			
			$fcoeff = $_csum > $price ? $price / $_csum : 1;			
		}
		for($i = 0; $i < sizeof($comms); $i++) {			
			$_commission = $scheme['commission_type'] == 'fixed' ? $comms[$i] * $quantity * $fcoeff : $price * 0.01 * $comms[$i];
			if($_commission > 0 && $this->check_aff_active($aff_ids[$i])) { //計算獎金前確認有無停權
				$out[$aff_ids[$i]] =	array(
					'commission' => $_commission,
					'autoadd' => $scheme['_autoadd'][$num_levels - 1][$i],
					'mta_scheme_id' => $scheme['id'],
					'num_levels' => $num_levels,
					'level' => ($i + 1)
				);
			}
		}
		//echo '5 $out: ' . print_r($out, 1) . '<br/>';//-tmp
		return $out;
	}
	
	public function getOrderCommissions($order_id) {
		$transaction_table = $this->config->get('module_aff_classic_status') && $this->config->get('module_aff_classic_commission_table') ? 'customer_affiliate_transaction' : 'customer_transaction';		
		$res = $this->db->query("SELECT mta_o.*, tt." . $transaction_table . "_id AS affiliate_transaction_id, CONCAT(c.firstname, ' ', c.lastname) AS affiliate_name FROM " . DB_PREFIX . "mta_order mta_o LEFT JOIN " . DB_PREFIX . "customer c ON c.customer_id=mta_o.affiliate_id LEFT JOIN " . DB_PREFIX . $transaction_table  . " tt ON 
		(tt.customer_id = mta_o.affiliate_id AND
		tt.order_id = mta_o.order_id)  
		WHERE mta_o.order_id='" . (int) $order_id . "' ORDER BY mta_o.mta_order_id ASC");
		$out = array();
		foreach($res->rows as $r) {
			if($r['commission_added'] && !$r['affiliate_transaction_id']) {
				$r['commission_added'] = '0';
				$this->db->query("UPDATE " . DB_PREFIX . "mta_order SET commission_added = '0' WHERE mta_order_id = '" . (int)$r['mta_order_id'] . "'");
			}
			$out[] = $r;
		}
		return $out;
	}
	
	public function autoAddCommissions($order_id) {		
		$_comms = $this->getOrderCommissions($order_id);
		$_lang_loaded = false;
		foreach($_comms as $_c) {
			if(!$_c['commission_added'] && $_c['autoadd']) {
				if(!$_lang_loaded) {
					$this->load->language('extension/mta/mta');
					$_lang_loaded = true;
				}
				$this->addMtaTransaction($order_id, $_c['affiliate_id'], $this->language->get('text_order_id') . ' #' . $order_id);
			}
		}
	}	
	
	public function addMtaTransaction($order_id, $affiliate_id, $description) {
		$res = $this->db->query("SELECT mta_order_id, commission FROM " . DB_PREFIX . "mta_order WHERE order_id='" . (int) $order_id . "' and affiliate_id='" . (int) $affiliate_id . "' AND commission_added='0'");
		if($res->num_rows < 1) return false;
		$commission = $res->row['commission'];
		$res2 = $this->db->query("SELECT " . DB_PREFIX . "mta_order_product.num_levels, " . DB_PREFIX . "mta_order_product.level, " . DB_PREFIX . "order_product.quantity, " . DB_PREFIX . "product_description.name AS product_name FROM " . DB_PREFIX . "mta_order_product LEFT JOIN " . DB_PREFIX . "order_product ON " . DB_PREFIX . "order_product.order_product_id=" . DB_PREFIX . "mta_order_product.order_product_id LEFT JOIN " . DB_PREFIX . "product_description ON " . DB_PREFIX . "product_description.product_id=" . DB_PREFIX . "mta_order_product.product_id WHERE " . DB_PREFIX . "mta_order_product.mta_order_id='" . (int) $res->row['mta_order_id'] . "'  GROUP BY " . DB_PREFIX . "mta_order_product.order_product_id");
		if($res2->num_rows > 0) {
			$this->load->language('extension/mta/mta');
			$_ar = array();

			$level = $res2->rows[0]['level'];
			$num_levels = $res2->rows[0]['num_levels'];
			if($level && $num_levels){
				$_str = sprintf($this->language->get('text_transaction_level'), (intval($num_levels) - intval($level) + 1));
				$_str .= ' 會員 購物回饋金';
				$_ar[] = $_str;
			}
			
			/* 原始程式碼
			foreach($res2->rows as $_r) {
				$_str = $_r['product_name'];
				if($_r['quantity'] > 1) $_str .= ' x' . $_r['quantity'];
				if($_r['level']) $_str .= sprintf($this->language->get('text_transaction_level'), (intval($_r['num_levels']) - intval($_r['level']) + 1));
				$_ar[] = $_str;
			}
			*/

			if(sizeof($_ar) > 0) $description .= ': ' . implode(', ', $_ar);
		}
		$this->db->query("UPDATE " . DB_PREFIX . "mta_order SET commission_added='1' WHERE order_id='" . (int) $order_id . "' AND affiliate_id='" . (int) $affiliate_id . "'");
		$this->load->model('account/customer');
		//$this->config->set('_mta_transaction_description_', $description);
		$this->model_account_customer->addTransaction($affiliate_id, $description, $commission, $order_id);
		return true;
	}
	
	public function check_aff_active($aff_id) {
		$res = $this->db->query("SELECT c.customer_id FROM " . DB_PREFIX . "customer_affiliate ca, " . DB_PREFIX . "customer c WHERE  ca.customer_id='" . $aff_id . "' AND c.customer_id = ca.customer_id AND ca.status = '1' AND c.status = '1'");
		return ($res->num_rows > 0);
	}
	
	public function getSubAffiliates($affiliate_ids, $max_level = false) {
		if(!is_array($affiliate_ids)) $affiliate_ids = array($affiliate_ids);
		$res = $this->db->query("SELECT COUNT(*) AS c FROM " . DB_PREFIX . "mta_affiliate WHERE parent_affiliate_id IN (" . implode(',', $affiliate_ids) . ")" . ($max_level ? " AND level_original <= '" . $max_level . "'" : ''));
		if(!$res->row['c']) return false;
		$out = array(intval($res->row['c']));
		$res = $this->db->query("SELECT affiliate_id FROM " . DB_PREFIX . "mta_affiliate WHERE parent_affiliate_id IN (" . implode(',', $affiliate_ids) . ")" . ($max_level ? " AND level_original <= '" . $max_level . "'" : ''));
		if($res->num_rows < 1) return $out;
		$_subs = array();
		foreach($res->rows as $_r) {
			$_subs[] = $_r['affiliate_id'];
		}
		$_sub = $this->getSubAffiliates($_subs, $max_level);
		if(!$_sub) return $out;
		foreach($_sub as $_i => $num) {
			if(!isset($out[$_i + 1])) $out[$_i + 1] = 0;
			$out[$_i + 1] += $num;
		}
		return $out;
	}
	
}