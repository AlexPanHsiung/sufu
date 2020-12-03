<?php

class ControllerExtensionModuleMtaEvent extends Controller {

	public function eventGetCustomerPost(&$route, &$args, &$data) {
		if(!$this->config->get('mta_ypx_status') || !$data || !isset($data['customer_id']) || isset($data['affiliate_id'])) return;				
		$res = $this->db->query("SELECT parent_affiliate_id FROM " . DB_PREFIX . "mta_customer WHERE customer_id = '" . (int) $data['customer_id'] . "'");
		$data['affiliate_id'] = $res->num_rows ? (int) $res->row['parent_affiliate_id'] : 0;
		return $data;
	}


	public function eventAddCustomerPost(&$route, &$args, &$customer_id) {
		if(!$this->config->get('mta_ypx_status')) return;		
		$data = $args[0];
		$res = $this->db->query("SELECT parent_affiliate_id FROM " . DB_PREFIX . "mta_customer WHERE customer_id = '" . (int) $customer_id . "' AND parent_affiliate_id > 0");
		if($res->num_rows > 0) return;	
		$dt = isset($data['tracking']) ? $data['tracking'] : false;
		$aff_id = 0;
		if (isset($this->request->cookie['tracking']) || $dt || isset($this->request->get['tracking'])) $this->load->model('account/customer');
		if (isset($this->request->cookie['tracking'])) {			
			$affiliate_info = $this->model_account_customer->getAffiliateByTracking($this->request->cookie['tracking']);				
			if ($affiliate_info) $aff_id = $affiliate_info['customer_id'];
		}
		if(!$aff_id && $dt) {
			$affiliate_info = $this->model_account_customer->getAffiliateByTracking($dt);		
			if ($affiliate_info) $aff_id = $affiliate_info['customer_id'];
		}		
		if(!$aff_id && isset($this->request->get['tracking'])) {
			$affiliate_info = $this->model_account_customer->getAffiliateByTracking($this->request->get['tracking']);		
			if ($affiliate_info) $aff_id = $affiliate_info['customer_id'];
		}		
		
		if($aff_id) $this->db->query("REPLACE INTO " . DB_PREFIX . "mta_customer (customer_id, parent_affiliate_id) VALUES ('" . (int) $customer_id . "', '" . (int) $aff_id . "')");
	}

	public function eventAddAffiliatePost(&$route, &$args) {
		if(!$this->config->get('mta_ypx_status')) return;
		$affiliate_id = isset($args[0]) ? $args[0] : false;
		if(!$affiliate_id) return;
		$this->load->model('extension/mta/mta_affiliate');
		$this->model_extension_mta_mta_affiliate->addAffiliate($affiliate_id, $this->model_extension_mta_mta_affiliate->find_parent(), (isset($this->request->cookie['mta']) ? $this->request->cookie['mta'] : ''));	
	}

	public function eventAddOrderHistoryPre() {
		if(!$this->config->get('mta_ypx_status')) return;
		$this->config->set('config_affiliate_auto', false);
	}	
	
	public function eventAutoAddCommissions(&$route, &$args) {
		if(!$this->config->get('mta_ypx_status')) return;
		$order_id = $args[0];
		$order_status_id = intval($args[1]);
		if(!$order_id) return;
		$_autoadd_statuses = $this->config->get('mta_ypx_autoadd_statuses');
		if(!is_array($_autoadd_statuses)) $_autoadd_statuses = array($this->config->get('config_complete_status'));
		$_autoadd_statuses = array_map('intval', $_autoadd_statuses);
		if(!in_array($order_status_id, $_autoadd_statuses, true)) return;
		$this->load->model('extension/mta/mta_affiliate');
		$this->model_extension_mta_mta_affiliate->autoAddCommissions($order_id);
	}

	public function eventAddOrderPost(&$route, &$args, &$order_id) {
		if(!$this->config->get('mta_ypx_status')) return;
		$data = $args[0];
		if(!$order_id || !$data) return;		
		$this->load->model('extension/mta/mta_affiliate');
		$this->model_extension_mta_mta_affiliate->addOrder($order_id, $data);
	}	

	public function eventEditOrderPost(&$route, &$args) {
		if(!$this->config->get('mta_ypx_status')) return;
		$order_id = $args[0];
		$data = $args[1];
		if(!$order_id || !$data) return;		
		$this->load->model('extension/mta/mta_affiliate');
		$this->model_extension_mta_mta_affiliate->editOrder($order_id, $data);
	}		

	public function eventAddTransactionPost(&$route, &$args) {
		if(!$this->config->get('mta_ypx_status')) return;
		$descr = $this->config->get('_mta_transaction_description_');
		if(!$descr) return;		
		$affiliate_id = (int)$args[0];
		$order_id = isset($args[3]) ? ((int)$args[3]) : 0;
		$this->config->set('_mta_transaction_description_', '');
		if($this->config->get('module_aff_classic_status') && $this->config->get('module_aff_classic_commission_table')) {
			$res = $this->db->query("SELECT customer_affiliate_transaction_id AS trid FROM " . DB_PREFIX . "customer_affiliate_transaction WHERE customer_id = '" . $affiliate_id . "' AND order_id = '" . $order_id . "' ORDER BY customer_affiliate_transaction_id DESC LIMIT 1");
			if($res->num_rows) $this->db->query("UPDATE " . DB_PREFIX . "customer_affiliate_transaction SET description = '" . $this->db->escape($descr) . "' WHERE customer_affiliate_transaction_id = '" . (int)$res->row['trid'] . "'");
		} else {
			$res = $this->db->query("SELECT customer_transaction_id AS trid FROM " . DB_PREFIX . "customer_transaction WHERE customer_id = '" . $affiliate_id . "' AND order_id = '" . $order_id . "' ORDER BY customer_transaction_id DESC LIMIT 1");
			if($res->num_rows) $this->db->query("UPDATE " . DB_PREFIX . "customer_transaction SET description = '" . $this->db->escape($descr) . "' WHERE customer_transaction_id = '" . (int)$res->row['trid'] . "'");			
		}
	}

	public function eventDeleteOrder(&$route, &$args) {
		if(!$this->config->get('mta_ypx_status')) return;
		$order_id = $args[0];
		$this->load->model('extension/mta/mta_affiliate');
		$this->model_extension_mta_mta_affiliate->deleteOrder($order_id);
	}
	
}
