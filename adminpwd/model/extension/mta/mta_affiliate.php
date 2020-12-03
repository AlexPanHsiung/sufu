<?php


class ModelExtensionMtaMtaAffiliate extends MtaScheme {	
	
	public function convertPreMtaAffiliates() {		
		$res = $this->db->query("SELECT " . DB_PREFIX . "customer_affiliate.customer_id AS aid, " . DB_PREFIX . "mta_customer.parent_affiliate_id AS pid FROM " . DB_PREFIX . "customer_affiliate LEFT JOIN " . DB_PREFIX . "mta_customer ON " . DB_PREFIX . "mta_customer.customer_id=" . DB_PREFIX . "customer_affiliate.customer_id LEFT JOIN " . DB_PREFIX . "mta_affiliate ON " . DB_PREFIX . "mta_affiliate.affiliate_id=" . DB_PREFIX . "customer_affiliate.customer_id WHERE " . DB_PREFIX . "mta_affiliate.affiliate_id IS NULL");
		
		$ar = array();		
		foreach($res->rows as $r) {
			$ar[intval($r['aid'])] = $r['pid'];
		}		
		$ar = mta_find_all_parents($ar);		
		//print_r($ar);//-tmp
		$_sqlar = array();
		foreach($ar as $aid => $pids) {
			$_sqlar[] = "('" . $aid . "','" . ($pids ? $pids[0] : 0) . "','" . ($pids ? implode(',', $pids) : "") . "','" . ($pids ? sizeof($pids) + 1 : 1) . "')";
		}
		$this->db->query("INSERT INTO " . DB_PREFIX . "mta_affiliate (affiliate_id, parent_affiliate_id, all_parent_ids, level_original) VALUES " . implode(',', $_sqlar));
		return $this->db->countAffected();
	}
	
	public function countPreMtaAffiliates() {		
		$res = $this->db->query("SELECT COUNT(*) AS c FROM " . DB_PREFIX . "customer_affiliate LEFT JOIN " . DB_PREFIX . "mta_affiliate ON " . DB_PREFIX . "mta_affiliate.affiliate_id=" . DB_PREFIX . "customer_affiliate.customer_id WHERE " . DB_PREFIX . "mta_affiliate.affiliate_id IS NULL");
		return $res->row['c'];
	}
	
	public function moveFromScheme($from, $to) {
		if(!mta_check_int($from) || !mta_check_int($to)) return false;
		if(($from && !$this->_checkId($from)) || ($to && !$this->_checkId($to))) return false;
		$res = $this->db->query("SELECT commission_type AS ct FROM " . DB_PREFIX . "mta_scheme WHERE mta_scheme_id='" . $to . "'");
		//if($res->row['ct'] != 'percentage') return false;
		$query = "UPDATE " . DB_PREFIX . "mta_affiliate SET mta_scheme_id=" . ($to ? ("'" . $to . "'") : "NULL") . " WHERE mta_scheme_id" . ($from ? ("='" . $from . "'") : " IS NULL");		
		$this->db->query($query);
		return $this->db->countAffected();		
	}
	
	public function countUsers($scheme_id) {		
		$res = $this->db->query("SELECT COUNT(*) AS c FROM " . DB_PREFIX . "mta_affiliate WHERE mta_scheme_id='" . $this->db->escape($scheme_id) . "'");
		return $res->row['c'];		
	}
	
	public function getAffiliate($affiliate_id, $get_parent_name=false) {
		if(!mta_check_int($affiliate_id) || $affiliate_id < 1) return false;
		$res = $this->db->query("SELECT affiliate_id AS id, mta_scheme_id AS scheme_id, parent_affiliate_id, all_parent_ids, level_original FROM " . DB_PREFIX . "mta_affiliate WHERE affiliate_id='" . $affiliate_id . "'");
		if($res->num_rows < 1) return false;
		$out = $res->row;
		if($get_parent_name && $out['parent_affiliate_id']) {
			$res = $this->db->query("SELECT CONCAT(firstname, ' ', lastname) AS n FROM " . DB_PREFIX . "customer WHERE customer_id='" . $out['parent_affiliate_id'] . "'");
			$out['parent_affiliate_name'] = $res->row['n'];
		}
		$out['parents'] = $out['all_parent_ids'] ? explode(',', $out['all_parent_ids']) : array();
		return $out;
	}		

	public function fix_children($parent, $parent_parents) {
		//change parents for all children of this affiliate		
		$res = $this->db->query("SELECT affiliate_id AS id FROM " . DB_PREFIX . "mta_affiliate WHERE parent_affiliate_id='" . $parent . "'");
		if($res->num_rows < 1) return;		
		$ids = array();
		foreach($res->rows as $r) {
			$ids[] = $r['id'];
		}		
		array_unshift($parent_parents, $parent);
		$_q = "UPDATE " . DB_PREFIX . "mta_affiliate SET all_parent_ids='" . $this->db->escape(implode(',', $parent_parents)) . "', level_original='" . (sizeof($parent_parents) + 1) . "' WHERE parent_affiliate_id='" . $parent . "'";		
		$this->db->query($_q);
		foreach($ids as $parent) {			
			$this->fix_children($parent, $parent_parents);
		}
	}	
	
}
