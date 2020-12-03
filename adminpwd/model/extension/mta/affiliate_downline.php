<?php

class ModelExtensionMtaAffiliateDownline extends Model {

	public function countSubs($affiliate_id) {
		$res = $this->db->query("SELECT COUNT(*) AS c FROM " . DB_PREFIX . "mta_affiliate WHERE `parent_affiliate_id` = '" . (int)$affiliate_id . "'");
		return $res->row['c'];
	}
	
	public function loadSubs($affiliate_id) {	
		$this->load->model('extension/mta/affiliate');		
		$transaction_table = $this->model_extension_mta_affiliate->getTransactionTable();
		$q = "SELECT (SELECT COUNT(*) FROM " . DB_PREFIX . "mta_affiliate WHERE `parent_affiliate_id` = mta1.`affiliate_id`) AS c, CONCAT(c.firstname, ' ', c.lastname) AS `name`, c.email, c.telephone, c.customer_id AS affiliate_id, 
		(SELECT SUM(`amount`) FROM " . $transaction_table . " WHERE customer_id  = mta1.`affiliate_id` AND `amount` > 0) AS e_te,
		(SELECT SUM(`amount`) FROM " . $transaction_table . " WHERE customer_id  = mta1.`affiliate_id` AND `amount` > 0 AND date_added > SUBDATE(NOW(), INTERVAL 1 MONTH)) AS e_elm,
 		c.status AS c_status, ca.status AS a_status 
FROM " . DB_PREFIX . "mta_affiliate mta1 LEFT JOIN " . DB_PREFIX . "customer c ON c.`customer_id`=mta1.`affiliate_id` LEFT JOIN " . DB_PREFIX . "customer_affiliate ca ON ca.customer_id=c.customer_id WHERE mta1.`parent_affiliate_id` = '" . (int)$affiliate_id . "' AND ca.customer_id IS NOT NULL GROUP BY mta1.`affiliate_id`";

		$res = $this->db->query($q);
		return $res->rows;
	}		

}
