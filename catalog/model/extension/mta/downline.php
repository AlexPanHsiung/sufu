<?php

class ModelExtensionMtaDownline extends Model {

	public function canSee($self_id, $affiliate_id, $max_level = false) {
		if($self_id == $affiliate_id) return true;
		$this->load->model('extension/mta/mta_affiliate');
		$aff = $this->model_extension_mta_mta_affiliate->getAffiliate($affiliate_id);
		return ($aff && in_array(intval($self_id), $aff['parents']) && (!$max_level || intval($aff['level_original']) <= $max_level));
	}

	public function countSubs($affiliate_id) {
		$res = $this->db->query("SELECT COUNT(*) AS c FROM " . DB_PREFIX . "mta_affiliate mta_a, " . DB_PREFIX . "customer cust, " . DB_PREFIX . "customer_affiliate ca WHERE mta_a.parent_affiliate_id = '" . (int)$affiliate_id . "' AND cust.customer_id = mta_a.affiliate_id AND ca.customer_id = mta_a.affiliate_id AND cust.status='1' AND ca.status='1'");
		return $res->row['c'];
	}
	
	public function loadSubs($affiliate_id, $max_level = false) {		
		$transaction_table = DB_PREFIX . ($this->config->get('module_aff_classic_status') && $this->config->get('module_aff_classic_commission_table') ? 'customer_affiliate_transaction' : 'customer_transaction');
		$q = "SELECT (SELECT COUNT(*) FROM " . DB_PREFIX . "mta_affiliate mta_a, " . DB_PREFIX . "customer cust0, " . DB_PREFIX . "customer_affiliate ca0 WHERE mta_a.parent_affiliate_id = mta1.affiliate_id ";
		if($max_level) $q .= " AND mta_a.level_original <= '" . $max_level . "' ";
		$q .= " AND cust0.customer_id = mta_a.affiliate_id  AND ca0.customer_id = mta_a.affiliate_id AND cust0.status='1' AND ca0.status='1') AS c,cust.lastname AS `lastname`, cust.firstname AS `firstname`, CONCAT(cust.lastname, ' ', cust.firstname) AS `name`, a.customer_id AS affiliate_id";
		if($this->config->get('mta_ypx_downline_email')) $q .= ", cust.email";
		if($this->config->get('mta_ypx_downline_phone')) $q .= ", cust.telephone"; 
		if($this->config->get('mta_ypx_downline_earnings')) $q .= ", (SELECT SUM(`amount`) FROM " . $transaction_table . " WHERE customer_id  = mta1.affiliate_id AND `amount` > 0) AS e_te,
		(SELECT SUM(`amount`) FROM " . $transaction_table . " WHERE customer_id  = mta1.affiliate_id AND `amount` > 0 AND date_added > SUBDATE(NOW(), INTERVAL 1 MONTH)) AS e_elm";
		$q .= " FROM " . DB_PREFIX . "mta_affiliate mta1, " . DB_PREFIX . "customer_affiliate a, " . DB_PREFIX . "customer cust WHERE mta1.parent_affiliate_id = '" . (int)$affiliate_id . "' AND a.customer_id=mta1.affiliate_id AND cust.customer_id = a.customer_id AND a.status = '1' AND cust.status = '1' ";
		if($max_level) $q .= " AND mta1.level_original <= '" . $max_level . "' ";
		$q .= " GROUP BY mta1.affiliate_id";
		$res = $this->db->query($q);
		return $res->rows;
	}	

}
