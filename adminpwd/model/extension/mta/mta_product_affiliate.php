<?php


class ModelExtensionMtaMtaProductAffiliate extends MtaProduct {

	public function getProductAffiliates($product_id, $mod_type='', $mod_id=0) {
		$out = array();
		$res = $this->db->query("SELECT mta_scheme_id, affiliate_id FROM " . DB_PREFIX . "mta_product_affiliate WHERE product_id='" . (int) $product_id . "' AND price_mod_type='" . $this->db->escape($mod_type) . "' AND price_mod_id='" . (int) $mod_id . "'");
		if($res->num_rows > 0) {
			foreach($res->rows as $r) {
				$_id = strval($r['mta_scheme_id']);
				if(!isset($out[$_id])) $out[$_id] = array();
				$out[$_id][] = $r['affiliate_id'];
			}			
		}
		return $out;
	}
	
	
}