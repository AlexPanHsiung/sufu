<?php
namespace Cart;
class Customer {
	private $customer_id;
	private $firstname;
	private $lastname;
	private $customer_group_id;
	private $email;
	private $telephone;
	private $newsletter;
	private $address_id;

	public function __construct($registry) {
		$this->config = $registry->get('config');
		$this->db = $registry->get('db');
		$this->request = $registry->get('request');
		$this->session = $registry->get('session');

		if (isset($this->session->data['customer_id'])) {
			$customer_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE customer_id = '" . (int)$this->session->data['customer_id'] . "' AND status = '1'");

			if ($customer_query->num_rows) {
				$this->customer_id = $customer_query->row['customer_id'];
				$this->firstname = $customer_query->row['firstname'];
				$this->lastname = $customer_query->row['lastname'];
				$this->customer_group_id = $customer_query->row['customer_group_id'];
				$this->email = $customer_query->row['email'];
				$this->telephone = $customer_query->row['telephone'];
				$this->newsletter = $customer_query->row['newsletter'];
				$this->address_id = $customer_query->row['address_id'];

				$this->db->query("UPDATE " . DB_PREFIX . "customer SET language_id = '" . (int)$this->config->get('config_language_id') . "', ip = '" . $this->db->escape($this->request->server['REMOTE_ADDR']) . "' WHERE customer_id = '" . (int)$this->customer_id . "'");

			
if($this->config->get('mta_ypx_status')) $this->_fix_parent_aff($customer_query->row);//+mod by yp
			


				$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer_ip WHERE customer_id = '" . (int)$this->session->data['customer_id'] . "' AND ip = '" . $this->db->escape($this->request->server['REMOTE_ADDR']) . "'");

				if (!$query->num_rows) {
					$this->db->query("INSERT INTO " . DB_PREFIX . "customer_ip SET customer_id = '" . (int)$this->session->data['customer_id'] . "', ip = '" . $this->db->escape($this->request->server['REMOTE_ADDR']) . "', date_added = NOW()");
				}
			} else {
				$this->logout();
			}
		}
	}

  public function login($email, $password, $override = false) {

            		$tloginby=$this->config->get('module_telephone_loginby');
  	                $tstatus=$this->config->get('module_telephone_login_status');
			
		if ($override) {
			$customer_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE LOWER(email) = '" . $this->db->escape(utf8_strtolower($email)) . "' AND status = '1'");
		} else {
			
            	
            	if($tloginby==0){
			$customer_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE LOWER(email) = '" . $this->db->escape(utf8_strtolower($email)) . "' AND (password = SHA1(CONCAT(salt, SHA1(CONCAT(salt, SHA1('" . $this->db->escape($password) . "'))))) OR password = '" . $this->db->escape(md5($password)) . "') AND status = '1'");
			    }
			    elseif($tloginby==1){
			$customer_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE telephone = '" . $this->db->escape(utf8_strtolower($email)) . "' AND (password = SHA1(CONCAT(salt, SHA1(CONCAT(salt, SHA1('" . $this->db->escape($password) . "'))))) OR password = '" . $this->db->escape(md5($password)) . "') AND status = '1'");
			    }
			     elseif($tloginby==2){
			$customer_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE LOWER(email) = '" . $this->db->escape(utf8_strtolower($email)) . "' OR telephone = '" . $this->db->escape(utf8_strtolower($email)) . "' AND (password = SHA1(CONCAT(salt, SHA1(CONCAT(salt, SHA1('" . $this->db->escape($password) . "'))))) OR password = '" . $this->db->escape(md5($password)) . "') AND status = '1'");
			    }
			    else{
			$customer_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE LOWER(email) = '" . $this->db->escape(utf8_strtolower($email)) . "' AND (password = SHA1(CONCAT(salt, SHA1(CONCAT(salt, SHA1('" . $this->db->escape($password) . "'))))) OR password = '" . $this->db->escape(md5($password)) . "') AND status = '1'");
			    }
        
           
			
		}

		if ($customer_query->num_rows) {
			$this->session->data['customer_id'] = $customer_query->row['customer_id'];

			$this->customer_id = $customer_query->row['customer_id'];
			$this->firstname = $customer_query->row['firstname'];
			$this->lastname = $customer_query->row['lastname'];
			$this->customer_group_id = $customer_query->row['customer_group_id'];
			$this->email = $customer_query->row['email'];
			$this->telephone = $customer_query->row['telephone'];
			$this->newsletter = $customer_query->row['newsletter'];
			$this->address_id = $customer_query->row['address_id'];
		
			$this->db->query("UPDATE " . DB_PREFIX . "customer SET language_id = '" . (int)$this->config->get('config_language_id') . "', ip = '" . $this->db->escape($this->request->server['REMOTE_ADDR']) . "' WHERE customer_id = '" . (int)$this->customer_id . "'");

			
if($this->config->get('mta_ypx_status')) $this->_fix_parent_aff($customer_query->row);//+mod by yp
			


			return true;
		} else {
			return false;
		}
	}

	public function logout() {

			
		//+mod by yp start		
		if(isset($this->session->data['_mta_ypx_aff_id'])) unset($this->session->data['_mta_ypx_aff_id']);
		if(isset($this->session->data['_mta_ypx_aff_code'])) unset($this->session->data['_mta_ypx_aff_code']);		
		//+mod by yp end	
		

		unset($this->session->data['customer_id']);

        unset($this->session->data['openModal']);
      

		$this->customer_id = '';
		$this->firstname = '';
		$this->lastname = '';
		$this->customer_group_id = '';
		$this->email = '';
		$this->telephone = '';
		$this->newsletter = '';
		$this->address_id = '';
	}

	public function isLogged() {
		return $this->customer_id;
	}

	public function getId() {
		return $this->customer_id;
	}

	public function getFirstName() {
		return $this->firstname;
	}

	public function getLastName() {
		return $this->lastname;
	}

	public function getGroupId() {
		return $this->customer_group_id;
	}

	public function getEmail() {
		return $this->email;
	}

	public function getTelephone() {
		return $this->telephone;
	}

	public function getNewsletter() {
		return $this->newsletter;
	}

	public function getAddressId() {
		return $this->address_id;
	}

	public function getBalance() {
		$query = $this->db->query("SELECT SUM(amount) AS total FROM " . DB_PREFIX . "customer_transaction WHERE customer_id = '" . (int)$this->customer_id . "'");

		return $query->row['total'];
	}


			
	//+mod by yp start
	private function _fix_parent_aff($data) {
		if(!isset($data['customer_id'])) return;
		if(!isset($data['affiliate_id'])) {
			$_res = $this->db->query("SELECT parent_affiliate_id FROM " . DB_PREFIX . "mta_customer WHERE customer_id = '" . (int)$data['customer_id'] . "'");
			$data['affiliate_id'] = $_res->num_rows ? (int) $_res->row['parent_affiliate_id'] : 0;
		}
		if(!$this->config->get('mta_ypx_db_perm') || !isset($data['affiliate_id'])) return;
		if(!isset($this->session->data['_mta_ypx_aff_id']) || $this->session->data['_mta_ypx_aff_id'] != $data['affiliate_id']) {
			$this->session->data['_mta_ypx_aff_id'] = $data['affiliate_id'];
			if($data['affiliate_id']) {
				$_res = $this->db->query("SELECT tracking FROM " . DB_PREFIX . "customer_affiliate WHERE customer_id = '" . (int)$data['affiliate_id'] . "'");
				if($_res->num_rows > 0) {
					$this->session->data['_mta_ypx_aff_code'] = $_res->row['tracking'];
				} else {
					$this->session->data['_mta_ypx_aff_code'] = '';
				}
			} else {
				$this->session->data['_mta_ypx_aff_code'] = '';
			}
		}
		$changed = false;
		if(strlen($this->session->data['_mta_ypx_aff_code']) > 0) {
			if(!isset($this->request->cookie['tracking']) || $this->request->cookie['tracking'] != $this->session->data['_mta_ypx_aff_code']) {
				$changed = true;
				if(isset($this->request->cookie['tracking'])) {
					setcookie('tracking', '', (time() - 3600), '/');
					setcookie('tracking', '', (time() - 3600), '/', '.' . preg_replace("/www\./i", '', $_SERVER['HTTP_HOST']));
				}
				$_exp = $this->config->get('mta_ypx_expire');
				$tracking_cookie_expire = $_exp ? time() + 86400 * $_exp : 0;
				setcookie('tracking', $this->session->data['_mta_ypx_aff_code'], $tracking_cookie_expire, '/');
				$this->request->cookie['tracking'] = $this->session->data['_mta_ypx_aff_code'];
				if(isset($this->request->post['tracking'])) $this->request->post['tracking'] = $this->session->data['_mta_ypx_aff_code'];
				if(isset($this->request->get['tracking'])) $this->request->get['tracking'] = $this->session->data['_mta_ypx_aff_code'];			
				if(isset($this->session->data['tracking'])) $this->session->data['tracking'] = $this->session->data['_mta_ypx_aff_code'];				
			}
		} else {
			if(isset($this->request->cookie['tracking'])) {
				$changed = true;
				setcookie('tracking', '', (time() - 3600), '/');
				setcookie('tracking', '', (time() - 3600), '/', '.' . preg_replace("/www\./i", '', $_SERVER['HTTP_HOST']));		
				unset($this->request->cookie['tracking']);
				if(isset($this->request->post['tracking'])) unset($this->request->post['tracking']);
				if(isset($this->request->get['tracking'])) unset($this->request->get['tracking']);
				if(isset($this->session->data['tracking'])) unset($this->session->data['tracking']);
			}
		}
		/*if($changed === true) {
			$url = 'http' . (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
			header('HTTP/1.1 302 Found');
			header('Location: ' . $url);
			die();
		}*/
	}
	//+mod by yp end
	

	public function getRewardPoints() {
		$query = $this->db->query("SELECT SUM(points) AS total FROM " . DB_PREFIX . "customer_reward WHERE customer_id = '" . (int)$this->customer_id . "'");

		return $query->row['total'];
	}
}
