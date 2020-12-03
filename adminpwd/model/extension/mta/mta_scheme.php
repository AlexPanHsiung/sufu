<?php

class ModelExtensionMtaMtaScheme extends MtaScheme {

	public function deleteScheme($id) {
		if(!mta_check_int($id) || $id < 1) return false;
		$fix_default = $this->getDefaultSchemeId() == $id ? true : false;
		if($fix_default) {
			$res = $this->db->query("SELECT COUNT(*) AS c FROM " . DB_PREFIX . "mta_scheme WHERE mta_scheme_id != '" . $id . "'");
			if($res->row['c'] < 1) return false;
		}
		$this->db->query("DELETE FROM " . DB_PREFIX . "mta_scheme WHERE mta_scheme_id = '". $id . "'");
		$ret = $this->db->countAffected() > 0 ? true : false;
		if($fix_default && $ret === true) $this->_fixDefaultScheme();
		return $ret;			
	}

	public function saveScheme($scheme) {
		
		$query = isset($scheme['id']) ? 'UPDATE ' : 'INSERT ';
		$query .= DB_PREFIX . "mta_scheme SET scheme_name='" . $this->db->escape($scheme['name']) . "', description='" . $this->db->escape($scheme['description']) . "', max_levels='" . $scheme['max_levels'] . "', is_default='" . intval($scheme['is_default']) . "', all_commissions='" . $this->db->escape(serialize($scheme['_commissions'])) . "', all_autoadd='" . $this->db->escape(serialize($scheme['_autoadd'])) . "', commission_type='" . $scheme['commission_type'] . "', before_shipping='" . intval($scheme['before_shipping']) . "', eternal='" . intval($scheme['eternal']) . "'";		
		if(!isset($scheme['id'])) $query .= ", signup_code='" . $this->db->escape($scheme['signup_code']) . "'";
		if(isset($scheme['id'])) $query .= " WHERE mta_scheme_id='" . $scheme['id'] . "'";
		
		$this->db->query('START TRANSACTION');		
 		
 		$dsid = $this->getDefaultSchemeId();
		if($dsid && $scheme['is_default']) 	$this->db->query("UPDATE " . DB_PREFIX . "mta_scheme SET is_default='0' WHERE is_default != '0'");			
		
		if(isset($scheme['id'])) {
			$this->db->query("DELETE FROM " . DB_PREFIX . "mta_autoapprove WHERE mta_scheme_id='" . $scheme['id'] . "'");
			if($this->db->countAffected() < 1) return $this->_rollback();
			$this->db->query("DELETE FROM " . DB_PREFIX . "mta_scheme_levels WHERE mta_scheme_id='" . $scheme['id'] . "'");
			if($this->db->countAffected() < 1) return $this->_rollback();
		}
				
		$this->db->query($query);
		
		if(!isset($scheme['id'])) {
			if($this->db->countAffected() < 1) return $this->_rollback();
			$sid = $this->db->getLastId();
			if(!$sid) return $this->_rollback();
			$scheme['id'] = intval($sid);			
		}		
		
		$_autoapprove = array();
		for($i = 0; $i < sizeof($scheme['_autoapprove']);$i++) {
			$_autoapprove[] = "('" . $scheme['id'] . "','" . ($i+1) . "','" . intval($scheme['_autoapprove'][$i]) . "')";
		}
		$this->db->query("INSERT INTO " . DB_PREFIX . "mta_autoapprove (mta_scheme_id , signup_level, autoapprove) VALUES " . implode(',', $_autoapprove));
		if($this->db->countAffected() < 1 || !$this->db->getLastId()) return $this->_rollback();
		
		$_levels = array();
		foreach($scheme['_commissions'] as $i => $v) {
			foreach($v as $i2 => $v2) {
				$_levels[] = "('" . $scheme['id'] . "','" . ($i + 1) . "','" . ($i2 + 1) . "','" . mta_float4($v2) . "','" . intval($scheme['_autoadd'][$i][$i2]) . "')";
			}
		}
		
		$this->db->query("INSERT INTO " . DB_PREFIX . "mta_scheme_levels (mta_scheme_id, num_levels, level, commission, autoadd) VALUES " . implode(',', $_levels));
		if($this->db->countAffected() < 1 || !$this->db->getLastId()) return $this->_rollback();	
		$this->_fixDefaultScheme();
		return $this->_commit();
	}
	
	public function checkName($name, $id = false) {
		$query = "SELECT mta_scheme_id FROM " . DB_PREFIX . "mta_scheme WHERE scheme_name='" . $this->db->escape($name) . "'";
		if($id !== false) $query .= " and mta_scheme_id != '" . $this->db->escape($id) . "'";
		$res = $this->db->query($query);
		return ($res->num_rows ? false : true);		
	}
	
	public function copyScheme($id, $name) {
		if(!$name || utf8_strlen($name) < 3 || utf8_strlen($name) > 100) return false;
		$dsid = $this->getDefaultSchemeId();
		$signup_code = $this->_make_signup_code();
		$this->db->query("START TRANSACTION");
		$this->db->query("INSERT INTO " . DB_PREFIX . "mta_scheme (scheme_name, description, max_levels, is_default, all_commissions, all_autoadd, commission_type, before_shipping, eternal, signup_code) SELECT '" . $this->db->escape($name) . "', description,	max_levels,	is_default, all_commissions, all_autoadd, commission_type, before_shipping, eternal, '" . $this->db->escape($signup_code) . "' FROM " . DB_PREFIX . "mta_scheme WHERE mta_scheme_id = '" . $this->db->escape($id) . "'");
		$sid = $this->db->getLastId();
		if(!$sid) return $this->_rollback();
		if($dsid == $id) $this->db->query("UPDATE " . DB_PREFIX . "mta_scheme SET is_default='0' WHERE mta_scheme_id='" . $sid . "'");
		$this->db->query("INSERT INTO " . DB_PREFIX . "mta_scheme_levels (mta_scheme_id, num_levels, 	level, commission, autoadd) SELECT '" . $sid . "', num_levels, 	level, commission, autoadd FROM " . DB_PREFIX . "mta_scheme_levels WHERE mta_scheme_id='" . $this->db->escape($id) . "'"); 
		if(!$this->db->countAffected()) return $this->_rollback();
		$this->db->query("INSERT INTO " . DB_PREFIX . "mta_autoapprove (mta_scheme_id, signup_level, autoapprove) SELECT '" . $sid . "', signup_level, autoapprove FROM " . DB_PREFIX . "mta_autoapprove WHERE mta_scheme_id='" . $this->db->escape($id) . "'");  		
		return ($this->db->countAffected() ? $this->_commit() : $this->_rollback());	
	}
	
	public function getMaxTotalCommission($scheme_id) {
		$res = $this->db->query("SELECT SUM(commission) AS c from " . DB_PREFIX . "mta_scheme_levels WHERE mta_scheme_id='" . ((int) $scheme_id) . "' GROUP BY num_levels ORDER BY c DESC LIMIT 1");
		if(!$res->num_rows) return 0;
		return $res->row['c'];		
	}
	
	public function hasAffiliates($scheme) {
		if(!$scheme || !$scheme['id']) return false;
		$res = $this->db->query("SELECT COUNT(*) AS c FROM " . DB_PREFIX . "mta_affiliate WHERE mta_scheme_id='" . (int) $scheme['id'] . "'");
		return ($res->row['c'] > 0 ? true : false);	
	}
	
//////////////////////////////////////////////////////////////////////	

	protected function _fixDefaultScheme() {
		$res = $this->db->query("SELECT COUNT(*) AS c FROM " . DB_PREFIX . "mta_scheme WHERE is_default > 0");
		if($res->row['c'] > 1) {
			$default = $this->getDefaultSchemeId();
			$this->db->query("UPDATE " . DB_PREFIX . "mta_scheme SET is_default='0' WHERE mta_scheme_id != '" . $default . "'");
		} else if($res->row['c'] == 0) {
			$res = $this->db->query("SELECT MIN(mta_scheme_id) AS id FROM " . DB_PREFIX . "mta_scheme");
			if($res->num_rows) $this->db->query("UPDATE " . DB_PREFIX . "mta_scheme SET is_default='1' WHERE mta_scheme_id='" . $res->row['id'] . "'");			
		}
	}	


	protected function _make_signup_code() {
		while(true) {
			$ret = uniqid();
			$_res = $this->db->query("select mta_scheme_id from " . DB_PREFIX . "mta_scheme where signup_code='" . $this->db->escape($ret) . "'");
			if(!$_res->num_rows) return $ret;
			usleep(250000);
		}
	}		
	
}
