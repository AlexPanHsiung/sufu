<?php

class MtaProduct extends MtaScheme {
	
	public function moveFromScheme($from, $to, $mods=array("''"), $parent=false) {
		if(!mta_check_int($from) || !mta_check_int($to)) return false;
		if(($from && !$this->_checkId($from)) || ($to && !$this->_checkId($to))) return false;
		$tbl = DB_PREFIX . 'mta_product' . ($parent === true ? '' : '_affiliate');
		$query = "UPDATE $tbl SET mta_scheme_id=" . ($to ? ("'" . $to . "'") : "NULL") . " WHERE mta_scheme_id" . ($from ? ("='" . $from . "'") : " IS NULL") . " AND price_mod_type IN (" . implode(',', $mods) . ")";
		$this->db->query($query);
		return $this->db->countAffected();
	}
	
	public function countUsers($scheme_id, $tbl = 'product') {		
		return $this->_countUsage($scheme_id, 'mta_scheme_id', $tbl);
	}
	
	public function countProductUsage($product_id, $tbl = 'product') {
		return $this->_countUsage($product_id, 'product_id', $tbl);
	}	
	
	public function getProductScheme($product_id) {				
		$res = $this->db->query("SELECT mta_scheme_id FROM " . DB_PREFIX . "mta_product WHERE product_id='" . $this->db->escape($product_id) . "' AND price_mod_type=''");
		if($res->num_rows < 1) return false;
		$scheme = $this->getSchemeById($res->row['mta_scheme_id']);		
		if(!$scheme || !$scheme['id'] || isset($scheme['error'])) return false;
		return $scheme;
	}
	
	public function getProductName($product_id) {
		$res = $this->db->query("SELECT `name` FROM " . DB_PREFIX . "product_description WHERE product_id='" . $product_id . "'");
		if($res->rows < 1) return '';
		return $res->row['name'];
	}
	
	public function getAllProductSubSchemes($product_id) {
		$out = array();
		$res = $this->db->query("SELECT price_mod_type AS mtype, price_mod_id AS mid, mta_scheme_id AS scheme_id FROM " . DB_PREFIX . "mta_product WHERE product_id='" . $this->db->escape($product_id) . "' AND price_mod_type!='' ORDER BY price_mod_type");
		if($res->num_rows > 0) {
			foreach($res->rows as $r) {				
				$_k = strval($r['mid']);
				if(!isset($out[$r['mtype']])) $out[$r['mtype']] = array();
				$out[$r['mtype']][$_k] = $r['scheme_id'];				
			}
		}
		return $out;
	}
	
	public function unsetSubSchemes($product_id, $ids, $mod_type, $tbl = 'product') {
		if(!is_array($ids)) $ids = array($ids);		
		$this->db->query("DELETE FROM " . DB_PREFIX . "mta_" . $tbl . " WHERE product_id='" . (int)$product_id . "' AND price_mod_type='" . $this->db->escape($mod_type) . "' AND price_mod_id IN (" . implode(',', $ids) . ")");		
	}
	
	public function unsetProductScheme($product_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "mta_product WHERE product_id='" . (int)$product_id . "' AND price_mod_type=''");
	}
	
	public function setProductScheme($product_id, $scheme_id) {
		$this->unsetProductScheme($product_id);
		$this->db->query("INSERT " . DB_PREFIX . "mta_product SET product_id='" . (int)$product_id . "', mta_scheme_id='" . (int)$scheme_id . "'");
	}
	
	public function updateProductScheme($product_id, $scheme_id) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "mta_product SET product_id='" . (int)$product_id . "', mta_scheme_id='" . (int)$scheme_id . "', price_mod_type='', price_mod_id='0' ON DUPLICATE KEY UPDATE mta_scheme_id='" . (int)$scheme_id . "'");	
	}

	public function setSubScheme($product_id, $id, $scheme_id, $mod_type) {		
		$this->unsetSubSchemes($product_id, $id, $mod_type);
		$this->db->query("INSERT " . DB_PREFIX . "mta_product SET product_id='" . (int)$product_id . "', mta_scheme_id='" . (int)$scheme_id . "', price_mod_type='" . $this->db->escape($mod_type) . "', price_mod_id='" . (int)$id . "'");	
	}
	
	public function setAllProductScheme($entity_type, $entity_id, $scheme_id) {
		if($entity_type != 'coupon') {
			$_type = substr($entity_type, 0, 1);
			if($_type === 'm') {
				$res = $this->db->query("SELECT DISTINCT(product_id) AS pid FROM " . DB_PREFIX . "product WHERE manufacturer_id = '" . (int)$entity_id . "'");
			} else if($_type === 'c') {
				$res = $this->db->query("SELECT DISTINCT(product_id) AS pid FROM " . DB_PREFIX . "product_to_category WHERE category_id = '" . (int)$entity_id . "'");
			}
			if($res->num_rows > 0) {
				$product_ids = array();
				foreach($res->rows as $r) {
					$product_ids[] = $r['pid'];
				}
				$this->_set_for_entity($product_ids, $entity_type, $scheme_id);
			}
		} else {
			$this->db->query("DELETE FROM " . DB_PREFIX . "mta_product WHERE price_mod_type='coupon' AND price_mod_id='" . (int)$entity_id . "'");
			if($scheme_id > 0) $this->db->query("INSERT INTO " . DB_PREFIX . "mta_product (product_id, price_mod_type, price_mod_id, mta_scheme_id) SELECT product_id, 'coupon', '" . (int)$entity_id . "', '" . (int)$scheme_id . "' FROM " . DB_PREFIX . "product");
		}	
	}
	
	public function getDefaultProductSchemes($entity_types, $entity_id) {
		if(!is_array($entity_types)) {
			$entity_types = array("'" . $this->db->escape($entity_types) . "'");
		} else {
			$_tmp = array();
			foreach($entity_types as $_et) {
				$_tmp[] = "'" . $this->db->escape($_et) . "'";
			}
			$entity_types = $_tmp;
		}
		$res = $this->db->query("SELECT entity_type AS `type`, mta_scheme_id AS scheme_id FROM " . DB_PREFIX . "mta_product_default_scheme WHERE entity_id = '" . (int)$entity_id . "' AND entity_type IN (" . implode(',', $entity_types) . ")");
		if($res->num_rows < 1) return false;
		return $res->rows;
	}
	
	public function setDefaultProductScheme($entity_type, $entity_id, $scheme_id) {
		if($scheme_id > 0) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "mta_product_default_scheme (entity_type, entity_id, mta_scheme_id) VALUES ('" . $this->db->escape($entity_type) . "', '" . (int)$entity_id . "', '" . (int)$scheme_id . "') ON DUPLICATE KEY UPDATE mta_scheme_id='" . (int)$scheme_id . "'");	
		} else {
			$this->db->query("DELETE FROM " . DB_PREFIX . "mta_product_default_scheme WHERE entity_type = '" . $this->db->escape($entity_type) . "' AND entity_id = '" . (int)$entity_id . "'");
		}
	}	
	
	public function	setDefaultsForNew($product_id) {
		$product_id = (int)$product_id;
		$this->db->query("INSERT INTO " . DB_PREFIX . "mta_product (product_id, price_mod_type, price_mod_id, mta_scheme_id) SELECT '$product_id', 'coupon', mpds.entity_id, mpds.mta_scheme_id FROM " . DB_PREFIX . "mta_product_default_scheme mpds WHERE mpds.entity_type='coupon' ON DUPLICATE KEY UPDATE mta_scheme_id=mpds.mta_scheme_id");
		$res = $this->db->query("SELECT manufacturer_id AS m_id FROM " . DB_PREFIX . "product WHERE product_id = '" . $product_id . "'");
		if($res->num_rows > 0 && $res->row['m_id']) {
			$m_id = (int)$res->row['m_id'];
			$res = $this->db->query("SELECT entity_type, mta_scheme_id FROM " . DB_PREFIX . "mta_product_default_scheme WHERE entity_type LIKE 'm%' AND entity_id = '" . $m_id . "'");
			foreach($res->rows as $r) {
				$this->_set_for_entity($product_id, $r['entity_type'], $r['mta_scheme_id']);
			}
		}
		$res = $this->db->query("SELECT category_id FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . $product_id . "'");
		if($res->num_rows > 0) {
			$c = array();
			foreach($res->rows as $r) {
				if($r['category_id']) $c[] = $r['category_id'];
			}
			if(sizeof($c) > 0) {
				$res = $this->db->query("SELECT entity_type, mta_scheme_id FROM " . DB_PREFIX . "mta_product_default_scheme WHERE entity_type != 'coupon' AND entity_type like 'c%' AND entity_id IN (" . implode(',', $c) . ") ORDER BY entity_id DESC");
				foreach($res->rows as $r) {
					$this->_set_for_entity($product_id, $r['entity_type'], $r['mta_scheme_id']);
				}			
			}		
		}	
	}
	
///////////////////////////
	protected function _countUsage($id, $id_field, $tbl = 'product') {
		$out = array();
		foreach(array('product','coupon','discount','special') as $k) {
			$out[$k] = 0;
		}				
		$tbl = DB_PREFIX . 'mta_' . $tbl;		
		$res = $this->db->query("SELECT COUNT(*) AS c, price_mod_type AS modt FROM " . $tbl . " WHERE " . $id_field . "='" . $this->db->escape($id) . "' GROUP BY price_mod_type");
		if($res->num_rows < 1) return $out;
		foreach($res->rows as $r) {
			$r['modt'] = str_replace(DB_PREFIX . 'mta_', '', $tbl) . ($r['modt'] == '' ? '' : '_' . $r['modt']); 
			$out[$r['modt']] = $r['c'];
		}
		return $out;
	}

	protected function _set_for_entity($product_ids, $entity_type, $scheme_id) {
		$price_mod_type = strpos($entity_type, '_') === 1 ? substr($entity_type, 2) : '';
		$_type = $price_mod_type;
		if($_type != 'coupon') $_type = 'product_' . $_type;
		if(!is_array($product_ids)) $product_ids = array($product_ids);
		$sz_product_ids = sizeof($product_ids);
		if($sz_product_ids > 20) {
			ignore_user_abort(1);
			set_time_limit($sz_product_ids * 10);
		}
		$this->db->query('START TRANSACTION');
		foreach($product_ids as $product_id) {
			if($price_mod_type === '') {
				($scheme_id > 0 ? $this->setProductScheme($product_id, $scheme_id) : $this->unsetProductScheme($product_id));
			} else {
				if($scheme_id > 0) {
					$q = "INSERT INTO " . DB_PREFIX . "mta_product (product_id, price_mod_type, price_mod_id, mta_scheme_id) SELECT '$product_id', '$price_mod_type', " . $_type . "_id, '" . (int)$scheme_id . "' FROM " . DB_PREFIX . $_type . " ";
					if($_type != 'coupon') $q .= " WHERE product_id = '" . $product_id . "' ";
					$q .=" ON DUPLICATE KEY UPDATE mta_scheme_id='" . (int)$scheme_id . "'";					
				} else {
					$q = "DELETE FROM " . DB_PREFIX . "mta_product WHERE product_id = '" . $product_id . "' AND price_mod_type = '" . $price_mod_type . "' AND price_mod_id IN (SELECT " . $_type . "_id FROM " . DB_PREFIX . $_type . " ";
					if($_type != 'coupon') $q .= " WHERE product_id = '" . $product_id . "'";
					$q .= ")";					
				}
				$this->db->query($q);
			}		
		}
		$this->_commit();
	}
	
}
