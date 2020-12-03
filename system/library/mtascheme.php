<?php

class MtaScheme extends Model {

	public function getAllSchemeIds() {
		$res = $this->db->query("SELECT mta_scheme_id FROM " . DB_PREFIX . "mta_scheme");		
		$out = array();
		foreach($res->rows as $r) {
			$out[] = $r['mta_scheme_id'];
		}
		return $out;	
	}	
	public function getDefaultSchemeId() {
		$res = $this->db->query("SELECT mta_scheme_id FROM " . DB_PREFIX . "mta_scheme WHERE is_default > 0 ORDER BY mta_scheme_id ASC LIMIT 1");
		return ($res->num_rows > 0 ? intval($res->row['mta_scheme_id']) : 0);
	}	
	
	public function getSchemeById($val) {
		return $this->_getScheme($val, 'mta_scheme_id');
	}
	
	public function getSchemeByName($val) {
		return $this->_getScheme($val, 'scheme_name');
	}

	public function getSchemeByCode($val) {
		return $this->_getScheme($val, 'signup_code');
	}
	
	public function deleteScheme($id) {
		if(!mta_check_int($id) || $id < 1) return false;
		$fix_default = $this->getDefaultSchemeId() == $id ? true : false;
		if($fix_default) {
			$res = $this->db->query("SELECT COUNT(*) AS c FROM " . DB_PREFIX . "mta_scheme WHERE mta_scheme_id!='" . $id . "'");
			if($res->row['c'] < 1) return false;
		}
		$this->db->query("DELETE FROM " . DB_PREFIX . "mta_scheme WHERE mta_scheme_id='" . $id . "'");
		$ret = $this->db->countAffected() > 0 ? true : false;
		if($fix_default && $ret === true) $this->_fixDefaultScheme();
		return $ret;			
	}

	public function setScheme($s, $allow_new = true) {		
		$scheme = array();
		if(!isset($s['id']) || !mta_check_int($s['id']) || $s['id'] < 1) {
			if($allow_new) {
				$scheme['signup_code'] = $this->_make_signup_code();
			} else {
				$scheme['error'] = 'Invalid ID';
				return $scheme;				
			}
		} else {
			$scheme['id'] = intval($s['id']);
			if(!preg_match("/^\d+$/", $s['id']) || $scheme['id'] < 1) {
				$scheme['error'] = 'Invalid ID';
				return $scheme;
			}			
		}
		
		foreach(array('is_default', 'before_shipping') as $_k) {
			$scheme[$_k] = (bool) $s[$_k];
		}		

		foreach(array('max_levels', 'eternal') as $_k) {
			$scheme[$_k] = (int) $s[$_k];
		}
		
		foreach($s['_autoapprove'] as $i => $v) {
			$s['_autoapprove'][$i] = (bool) $v;
		}
		
		foreach($s['_autoadd'] as $i => $v) {
			foreach($v as $i2 => $v2) {
				$v[$i2] = (bool) $v2;
			}
			$s['_autoadd'][$i] = $v;
		}

		foreach($s['_commissions'] as $i => $v) {
			foreach($v as $i2 => $v2) {
				$v[$i2] = mta_float4($v2);
			}
			$s['_commissions'][$i] = $v;
		}
		
		foreach($s as $k => $v) {
			if(!isset($scheme[$k])) $scheme[$k] = $v;
		}
 		
 		$dsid = $this->getDefaultSchemeId();
		if(!$dsid && !$scheme['is_default']) $scheme['is_default'] = true;
 		
		return $scheme;
	}
	
//////////////////////////////////////////////////////////////////////	
	protected function _checkId($id) {
		if(!mta_check_int($id) || $id < 1) return false;
		$r = $this->db->query("SELECT scheme_name FROM " . DB_PREFIX . "mta_scheme WHERE mta_scheme_id='" . $id . "'");
		return ($r->num_rows > 0 ? true : false);
	}

	protected function _getScheme($val, $by_field='mta_scheme_id') {
		$scheme = array();
		$res = $this->db->query("SELECT * FROM " . DB_PREFIX . "mta_scheme WHERE " . $by_field . " = '" . $this->db->escape($val) . "'");
		if($res->num_rows < 1) return $scheme;
		$s = array();
		$s = $res->row;
		$s['id'] = $s['mta_scheme_id'];
		$s['name'] = $s['scheme_name'];
		$s['_commissions'] = unserialize($s['all_commissions']);
		$s['_autoadd'] = unserialize($s['all_autoadd']);
		foreach(array('mta_scheme_id', 'scheme_name', 'all_commissions', 'all_autoadd') as $_k) {
			unset($s[$_k]);
		}
		$res = $this->db->query("SELECT autoapprove AS a FROM " . DB_PREFIX . "mta_autoapprove WHERE mta_scheme_id='" . $s['id'] . "' ORDER BY signup_level ASC");
		$s['_autoapprove'] = array();
		foreach($res->rows as $_r) {
			$s['_autoapprove'][] = $_r['a'];
		}
		return $this->setScheme($s);		
	}	
	
	protected function _rollback() {
		try {
			$this->db->query('ROLLBACK');
		} catch(Exception $e) {
			//
		}
		return false;
	}	
	
	protected function _commit() {
		$this->db->query('COMMIT');
		return true;
	}

	protected function _make_signup_code() {
		while(true) {
			$ret = uniqid();
			$_res = $this->db->query("SELECT mta_scheme_id FROM " . DB_PREFIX . "mta_scheme WHERE signup_code='" . $this->db->escape($ret) . "'");
			if($_res->num_rows < 1) return $ret;
			usleep(250000);
		}
	}			
	
	public function getSchemes($data=array()) {
		if(isset($data['fields'])) {
			if(is_array($data['fields'])) $data['fields'] = implode(',', $data['fields']);
		} else {
			$data['fields'] = '*';
		}
		$sql = "SELECT " . $data['fields'] . " FROM " . DB_PREFIX . "mta_scheme";
		
		if(isset($data['filter_raw'])) {
			$sql .= " WHERE " . $data['filter_raw'];
		} else if(isset($data['filter_commission_type'])) {
			$sql .= " WHERE commission_type='" . $data['filter_commission_type'] . "'";
		}
		
		$sort_data = array(
				'id' => 'mta_scheme_id',
				'levels' => 'max_levels',
				'default' => 'is_default',
				'type' => 'commission_type'				
		);	
		
		$_order = isset($data['sort']) && isset($sort_data, $data['sort']) ? $sort_data[$data['sort']]: '';
		if($_order) {			
			$_order .= (isset($data['order']) && (strtolower($data['order']) == 'desc') ? ' DESC' : ' ASC') . ', ';
		}
		$sql .= " ORDER BY {$_order}scheme_name ASC";
		
		if (isset($data['start']) || isset($data['limit'])) {
			if (!isset($data['start']) || $data['start'] < 0) {
				$data['start'] = 0;
			}
			if (!isset($data['limit']) || $data['limit'] < 1) {
				$data['limit'] = 25;
			}		
			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}	
		$res = $this->db->query($sql);
		return $res->rows;		
	}	

	public function getMaxTotalCommission($scheme_id) {
		$res = $this->db->query("SELECT SUM(commission) AS c from " . DB_PREFIX . "mta_scheme_levels WHERE mta_scheme_id='" . ((int) $scheme_id) . "' GROUP BY num_levels ORDER BY c DESC LIMIT 1");
		if($res->num_rows < 1) return 0;
		return $res->row['c'];		
	}

	
}
