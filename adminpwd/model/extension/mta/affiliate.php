<?php

class ModelExtensionMtaAffiliate extends Model {

	private $_aff_classic = -1;
	
	public function install() {
		$this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "mta_customer (
	customer_id int(11) NOT NULL,
	parent_affiliate_id int(11) NOT NULL,
	PRIMARY KEY (customer_id),
	KEY (parent_affiliate_id)
	) ENGINE=MyISAM");
		$this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "mta_scheme (
	mta_scheme_id INT(6) UNSIGNED NOT NULL auto_increment,
	scheme_name VARCHAR(100) NOT NULL DEFAULt '',
	description TEXT NOT NULL,
	max_levels SMALLINT(3) UNSIGNED NOT NULL DEFAULT '1',
	is_default TINYINT(1) UNSIGNED NOT NULL DEFAULT '0', 
	all_commissions TEXT NOT NULL,	
	all_autoadd TEXT NOT NULL,	
	commission_type ENUM('percentage','fixed') NOT NULL DEFAULT 'percentage',
	before_shipping TINYINT(1) UNSIGNED NOT NULL DEFAULT '1',
	eternal SMALLINT(3) UNSIGNED NOT NULL DEFAULT '0',
	signup_code CHAR(13) NOT NULL DEFAULt '',
	PRIMARY KEY (mta_scheme_id),
	UNIQUE KEY (`scheme_name`),
	UNIQUE KEY (`signup_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8");
	
		$this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "mta_scheme_levels (
	mta_scheme_level_id INT(8) UNSIGNED NOT NULL auto_increment,
	mta_scheme_id INT(6) UNSIGNED NOT NULL DEFAULT '1',
	num_levels SMALLINT(3) UNSIGNED NOT NULL DEFAULT '1',	
	level SMALLINT(3) UNSIGNED NOT NULL DEFAULT '1',	
	commission DECIMAL(15,4) NOT NULL DEFAULT '0.0000',
	autoadd SMALLINT(2) UNSIGNED NOT NULL DEFAULT '1',
	PRIMARY KEY (mta_scheme_level_id),
	UNIQUE KEY (mta_scheme_id, num_levels, level),
	CONSTRAINT `mta_scheme_level_ibfk_1` FOREIGN KEY (`mta_scheme_id`) REFERENCES `" .  DB_PREFIX . "mta_scheme` (`mta_scheme_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8");

		$this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "mta_autoapprove (
	mta_autoapprove_id INT(8) UNSIGNED NOT NULL auto_increment,
	mta_scheme_id INT(6) UNSIGNED NOT NULL DEFAULT '1',
	signup_level SMALLINT(3) UNSIGNED NOT NULL DEFAULT '1',	
	autoapprove SMALLINT(2) UNSIGNED NOT NULL DEFAULT '1',
	PRIMARY KEY (mta_autoapprove_id),
	UNIQUE KEY (mta_scheme_id, signup_level),
	CONSTRAINT `mta_autoapprove_ibfk_1` FOREIGN KEY (`mta_scheme_id`) REFERENCES `" .  DB_PREFIX . "mta_scheme` (`mta_scheme_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8");

		$this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "mta_affiliate (	
	affiliate_id INT(10) UNSIGNED NOT NULL DEFAULT '0',
	mta_scheme_id INT(6) UNSIGNED DEFAULT NULL,
	parent_affiliate_id INT(10) UNSIGNED NOT NULL DEFAULT '0',
	all_parent_ids TEXT NOT NULL,		
	level_original SMALLINT(3) UNSIGNED NOT NULL DEFAULT '1',		
	PRIMARY KEY (affiliate_id),
  KEY `FK_mta_scheme_id` (`mta_scheme_id`),
	CONSTRAINT `mta_affiliate_ibfk_1` FOREIGN KEY (`mta_scheme_id`) REFERENCES `" .  DB_PREFIX . "mta_scheme` (`mta_scheme_id`) ON DELETE SET NULL ON UPDATE CASCADE  	
) ENGINE=InnoDB DEFAULT CHARSET=utf8");

		$this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "mta_product (
	mta_product_id INT(11) UNSIGNED NOT NULL auto_increment,
	product_id INT(11) UNSIGNED NOT NULL DEFAULT '0',	
	price_mod_type ENUM('','coupon','special','discount') NOT NULL DEFAULT '',
	price_mod_id INT(11) UNSIGNED NOT NULL DEFAULT '0',	
	mta_scheme_id INT(6) UNSIGNED DEFAULT NULL,
	PRIMARY KEY (mta_product_id),
	UNIQUE KEY (product_id, price_mod_type, price_mod_id),
	KEY `FK_mta_product_mta_scheme_id` (`mta_scheme_id`),
	CONSTRAINT `mta_product_ibfk_1` FOREIGN KEY (`mta_scheme_id`) REFERENCES `" .  DB_PREFIX . "mta_scheme` (`mta_scheme_id`) ON DELETE CASCADE ON UPDATE CASCADE  	
) ENGINE=InnoDB DEFAULT CHARSET=utf8");

		$this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "mta_product_affiliate (
	mta_product_affiliate_id INT(10) UNSIGNED NOT NULL auto_increment,	
	product_id INT(11) UNSIGNED NOT NULL DEFAULT '0',
	affiliate_id INT(10) UNSIGNED NOT NULL DEFAULT '0',
	price_mod_type ENUM('','coupon','special','discount') NOT NULL DEFAULT '',
	price_mod_id INT(11) UNSIGNED NOT NULL DEFAULT '0',	
	mta_scheme_id INT(6) UNSIGNED DEFAULT NULL,
	PRIMARY KEY (mta_product_affiliate_id),
	UNIQUE KEY (product_id,affiliate_id,price_mod_type, price_mod_id),
	CONSTRAINT `mta_product_affiliate_ibfk_1` FOREIGN KEY (`affiliate_id`) REFERENCES `" .  DB_PREFIX . "mta_affiliate` (`affiliate_id`) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT `mta_product_affiliate_ibfk_2` FOREIGN KEY (`mta_scheme_id`) REFERENCES `" .  DB_PREFIX . "mta_scheme` (`mta_scheme_id`) ON DELETE CASCADE ON UPDATE CASCADE  	
) ENGINE=InnoDB DEFAULT CHARSET=utf8");

		$this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "mta_order (
	mta_order_id INT(11) UNSIGNED NOT NULL auto_increment,		
	order_id INT(11) NOT NULL DEFAULT '0',  	
	affiliate_id INT(10) UNSIGNED DEFAULT NULL,
	commission DECIMAL(15,4) NOT NULL DEFAULT '0.0000',
	commission_added TINYINT(1) UNSIGNED NOT NULL DEFAULT '0', 
	autoadd TINYINT(1) UNSIGNED NOT NULL DEFAULT '0', 
	PRIMARY KEY (mta_order_id),
	UNIQUE KEY (affiliate_id, order_id),
	CONSTRAINT `mta_order_ibfk_1` FOREIGN KEY (`affiliate_id`) REFERENCES `" .  DB_PREFIX . "mta_affiliate` (`affiliate_id`) ON DELETE SET NULL ON UPDATE CASCADE  	
) ENGINE=InnoDB DEFAULT CHARSET=utf8");

		$this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "mta_order_product (
	mta_order_product_id INT(11) UNSIGNED NOT NULL auto_increment,		
	mta_order_id INT(11) UNSIGNED DEFAULT NULL,
	product_id INT(11) UNSIGNED NOT NULL DEFAULT '0',	
	order_product_id INT(11) UNSIGNED NOT NULL DEFAULT '0',	
	affiliate_id INT(10) UNSIGNED DEFAULT NULL,	
	commission DECIMAL(15,4) NOT NULL DEFAULT '0.0000',
	mta_scheme_id INT(6) UNSIGNED DEFAULT NULL,
	num_levels SMALLINT(3) UNSIGNED NOT NULL DEFAULT '1',	
	level SMALLINT(3) UNSIGNED NOT NULL DEFAULT '1',
	autoadd TINYINT(1) UNSIGNED NOT NULL DEFAULT '0', 
	PRIMARY KEY (mta_order_product_id),
	UNIQUE KEY (affiliate_id, order_product_id),
	KEY `FK_mta_order_id` (`mta_order_id`),
	CONSTRAINT `mta_order_product_ibfk_1` FOREIGN KEY (`mta_order_id`) REFERENCES `" .  DB_PREFIX . "mta_order` (`mta_order_id`) ON DELETE CASCADE ON UPDATE CASCADE  	
) ENGINE=InnoDB DEFAULT CHARSET=utf8");

		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "mta_product_default_scheme` (
  `mta_product_default_scheme_id` INT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `entity_type` ENUM('coupon','m','c','m_coupon','m_special','m_discount','c_coupon','c_special','c_discount') NOT NULL DEFAULT 'coupon',
  `entity_id` INT(11) UNSIGNED NOT NULL DEFAULT '0',
  `mta_scheme_id` INT(6) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`mta_product_default_scheme_id`),
  UNIQUE KEY `enitity` (`entity_id`, `entity_type`),
  CONSTRAINT `mta_product_default_scheme_ibfk_1` FOREIGN KEY (`mta_scheme_id`) REFERENCES `" . DB_PREFIX . "mta_scheme` (`mta_scheme_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8");		

//		$res = $this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "customer LIKE 'affiliate_id'");
//		if(!$res->num_rows) $this->db->query("ALTER TABLE " . DB_PREFIX . "customer ADD affiliate_id INT(11) UNSIGNED NOT NULL DEFAULT '0'");
		$res = $this->db->query("SELECT customer_id, affiliate_id FROM `" . DB_PREFIX . "order` WHERE affiliate_id > 0 GROUP BY customer_id");
		$_toDB = array();
		foreach($res->rows as $_r) {
			$_toDB[] = "('" . (int) $_r['customer_id'] . "', '" . (int) $_r['affiliate_id'] . "')";
		}		
		if(sizeof($_toDB)) $this->db->query("INSERT IGNORE INTO " . DB_PREFIX . "mta_customer (customer_id, parent_affiliate_id) VALUES " . implode(',', $_toDB));
	}
	
	public function getLevels($aff_ids) {
		$out = array();
		$sql = "SELECT affiliate_id, level_original FROM " . DB_PREFIX . "mta_affiliate WHERE affiliate_id IN (" . implode(',', $aff_ids) . ")";
		$res = $this->db->query($sql);
		foreach($res->rows as $r) {
			$out['a' . $r['affiliate_id']] = (int)$r['level_original'];
		}
		return $out;
	}

	public function getAffiliatesMta($data = array()) {
		$transaction_table = $this->getTransactionTable();
		
		$sql = "SELECT *, CONCAT(c.firstname, ' ', c.lastname) AS name, (SELECT SUM(at.amount) FROM " . $transaction_table . " at WHERE at.customer_id = a.customer_id GROUP BY at.customer_id) AS balance, mta_a.mta_scheme_id AS scheme_id, mta_a.level_original AS `level` FROM " . DB_PREFIX . "customer_affiliate a LEFT JOIN " . DB_PREFIX . "customer c ON c.customer_id = a.customer_id LEFT JOIN " . DB_PREFIX . "mta_affiliate AS mta_a ON mta_a.affiliate_id=a.customer_id";

		$implode = array("c.status = '1'");

		if (!empty($data['filter_name'])) {
			$implode[] = "CONCAT(c.firstname, ' ', c.lastname) LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}

		if (!empty($data['filter_email'])) {
			$implode[] = "LCASE(c.email) = '" . $this->db->escape(utf8_strtolower($data['filter_email'])) . "'";
		}

		if (!empty($data['filter_code'])) {
			$implode[] = "a.tracking = '" . $this->db->escape($data['filter_code']) . "'";
		}

		if (isset($data['filter_status']) && $data['filter_status'] !== null) {
			$implode[] = "a.status = '" . (int)$data['filter_status'] . "'";
		}

		if (!empty($data['filter_date_added'])) {
			$implode[] = "DATE(a.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
		}

		//+mod by yp start
		if(isset($data['ids']) && preg_match("/^\d+(?:\,\d+)*$/", $data['ids'])) {
			$implode[] = 'a.customer_id ' . (isset($data['filter_ids']) && $data['filter_ids'] == 'exclude' ? 'NOT ' : '') . ' IN (' . $data['ids'] . ')';			
		}		
		//+mod by yp end
		
		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}

		$sort_data = array(
			'name',
			'c.email',
			'a.tracking',
			'a.status',			
			'a.date_added',
			'mta_a.level_original'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY `name`";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}		

		$query = $this->db->query($sql);

		return $query->rows;
	}
	
	public function getTotalAffiliatesMta($data = array()) {
		$sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "customer_affiliate a, " . DB_PREFIX . "customer c ";

		$implode = array("c.customer_id = a.customer_id AND c.status = '1'");

		if (!empty($data['filter_name'])) {
			$implode[] = "CONCAT(c.firstname, ' ', c.lastname) LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
		}

		if (!empty($data['filter_email'])) {
			$implode[] = "LCASE(c.email) = '" . $this->db->escape(utf8_strtolower($data['filter_email'])) . "'";
		}

		if (isset($data['filter_status']) && $data['filter_status'] !== null) {
			$implode[] = "a.status = '" . (int)$data['filter_status'] . "'";
		}

		if (!empty($data['filter_date_added'])) {
			$implode[] = "DATE(a.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
		}

		//+mod by  yp start
		if(isset($data['ids']) && preg_match("/^\d+(?:\,\d+)*$/", $data['ids'])) {
			$implode[] = 'a.customer_id ' . (isset($data['filter_ids']) && $data['filter_ids'] == 'exclude' ? 'NOT ' : '') . ' IN (' . $data['ids'] . ')';			
		}		
		//+mod by  yp end		
		
		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}

		$query = $this->db->query($sql);

		return $query->row['total'];
	}
	
	public function addMtaTransaction($order_id, $affiliate_id, $description) {
		$res = $this->db->query("SELECT mta_order_id, commission FROM " . DB_PREFIX . "mta_order WHERE order_id='" . (int) $order_id . "' and affiliate_id='" . (int) $affiliate_id . "' AND commission_added='0'");
		if($res->num_rows < 1) return false;
		$commission = $res->row['commission'];
		$res2 = $this->db->query("SELECT " . DB_PREFIX . "mta_order_product.num_levels, " . DB_PREFIX . "mta_order_product.level, " . DB_PREFIX . "order_product.quantity, " . DB_PREFIX . "product_description.name AS product_name FROM " . DB_PREFIX . "mta_order_product LEFT JOIN " . DB_PREFIX . "order_product ON " . DB_PREFIX . "order_product.order_product_id=" . DB_PREFIX . "mta_order_product.order_product_id LEFT JOIN " . DB_PREFIX . "product_description ON " . DB_PREFIX . "product_description.product_id=" . DB_PREFIX . "mta_order_product.product_id WHERE " . DB_PREFIX . "mta_order_product.mta_order_id='" . (int) $res->row['mta_order_id'] . "'  GROUP BY " . DB_PREFIX . "mta_order_product.order_product_id");
		if($res2->num_rows > 0) {
			$this->load->language('extension/mta/other');
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
		$this->load->model('customer/customer');
		if(!$this->getTransactionTable(false)) {
			$this->model_customer_customer->addTransaction($affiliate_id, $description, $commission, $order_id);
		} else {
			$this->load->model('extension/aff_classic');
			$this->model_extension_aff_classic->addTransaction($affiliate_id, $description, $commission, $order_id);
		}			
		return true;
	}
	
	public function getTransactionTable($table = true) {
		if($this->_aff_classic === -1) $this->_aff_classic = $this->config->get('module_aff_classic_status') && $this->config->get('module_aff_classic_commission_table');
		if(!$table) return $this->_aff_classic;
		return (DB_PREFIX . ($this->_aff_classic ? 'customer_affiliate_transaction' : 'customer_transaction'));		
	}

	public function deleteMtaTransaction($order_id, $affiliate_id) {
		$transaction_table = $this->getTransactionTable();
		
		$this->db->query("DELETE FROM " . $transaction_table . " WHERE order_id = '" . (int) $order_id . "' AND customer_id = '" . (int) $affiliate_id . "'");		
		//if(!$this->db->countAffected()) return false;
		$this->db->query("UPDATE " . DB_PREFIX . "mta_order SET commission_added='0' WHERE order_id='" . (int) $order_id . "' and affiliate_id='" . (int) $affiliate_id . "'");
		return true;
	}

	public function getOrderCommissions($order_id) {
		$transaction_table = $this->getTransactionTable();
		$q = "SELECT mta_o.mta_order_id, mta_o.order_id, mta_o.commission AS commission_total, mta_o.affiliate_id, mta_o.commission_added, mta_o.autoadd, CONCAT(c.firstname, ' ', c.lastname) AS affiliate_name, mta_s.mta_scheme_id AS scheme_id, mta_s.scheme_name AS scheme_name, mta_op.order_product_id, mta_op.commission, p.model AS product_name, tt." . substr($transaction_table, strlen(DB_PREFIX)) . "_id AS affiliate_transaction_id FROM " . DB_PREFIX . "mta_order mta_o LEFT JOIN " . DB_PREFIX . "customer c ON c.customer_id=mta_o.affiliate_id LEFT JOIN " . DB_PREFIX . "mta_order_product mta_op on mta_op.mta_order_id=mta_o.mta_order_id LEFT JOIN " . DB_PREFIX . "mta_scheme mta_s ON mta_s.mta_scheme_id=mta_op.mta_scheme_id LEFT JOIN " . DB_PREFIX . "product p ON p.product_id=mta_op.product_id LEFT JOIN " . $transaction_table  . " tt ON 
    (tt.customer_id = mta_o.affiliate_id AND
    tt.order_id = mta_o.order_id) WHERE mta_o.order_id='" . (int) $order_id . "' GROUP BY mta_op.order_product_id, mta_op.affiliate_id ORDER BY mta_o.mta_order_id ASC";
		$res = $this->db->query($q);
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
	
	public function setOrderCommissions($order_id, $commissions = false, $do_add = false) {
		$transaction_table = $this->getTransactionTable();
		if(!is_int($order_id)) $order_id = (int)$order_id;
		if(!$commissions) $commissions = array();
		$added = array();
		$_res = $this->db->query("SELECT customer_id AS affiliate_id FROM " .$transaction_table . " WHERE order_id = '" . $order_id . "'");
		foreach($_res->rows as $_r) {
			$added[] = (int)$_r['affiliate_id'];
		}
		$aff_ids = array();
		$comms = array();
		$totals = array();
		foreach($commissions as $__c) {
			foreach($__c as $_c) {
				if(in_array(intval($_c['affiliate_id']), $added)) continue;
				if(!isset($comms[$_c['affiliate_id']])) $comms[$_c['affiliate_id']] = array();
				if(!isset($totals[$_c['affiliate_id']])) $totals[$_c['affiliate_id']] = 0;
				$aff_ids[] = $_c['affiliate_id'];			
				$comms[$_c['affiliate_id']][] = $_c;
				$totals[$_c['affiliate_id']] += (float)$_c['commission'];
			}
		}
		if(sizeof($aff_ids) > 0) $aff_ids = array_values(array_unique($aff_ids));	
		$this->db->query("DELETE FROM " . DB_PREFIX . "mta_order_product WHERE mta_order_id IN (SELECT mta_order_id from " . DB_PREFIX . "mta_order WHERE order_id = '" . $order_id . "' AND commission_added='0')");
		$this->db->query("DELETE FROM " . DB_PREFIX . "mta_order WHERE order_id = '" . $order_id . "' AND commission_added='0'");
		if(sizeof($comms) < 1) return;
		$ops = array();
		$_res = $this->db->query("SELECT order_product_id, product_id FROM " . DB_PREFIX . "order_product WHERE order_id = '" . $order_id . "'");
		foreach($_res->rows as $_r) {
			$ops[$_r['order_product_id']] = $_r['product_id'];
		}
		if($do_add) $tAr = array();
		foreach($comms as $_aff_id => $_comms) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "mta_order (order_id, affiliate_id, commission) VALUES ('" . $order_id . "', '" . (int)$_aff_id . "', '" . $totals[$_aff_id] . "')");
			$mta_order_id = $this->db->getLastId();
			$qAr = array();			
			foreach($_comms as $_c) {
				if(!isset($ops[$_c['order_product_id']])) continue;
				$qAr[] = "('" . $mta_order_id . "', '" . (int)$_c['order_product_id'] . "', '" . (int)$ops[$_c['order_product_id']] . "', '" . (int)$_aff_id . "', '" . (float)$_c['commission'] . "', 0, 0, 0)";				
			}
			if($do_add && !in_array($_aff_id, $tAr)) $tAr[] = $_aff_id;
			if(sizeof($qAr) > 0) $this->db->query("INSERT INTO " . DB_PREFIX . "mta_order_product (mta_order_id, order_product_id, product_id, affiliate_id, commission, mta_scheme_id, num_levels, level) VALUES " . implode(', ', $qAr));
		}
		if($do_add && sizeof($tAr) > 0) {
			$this->load->language('extension/mta/mta');
			foreach($tAr as $_aff_id) {
				$this->addMtaTransaction($order_id, $_aff_id, $this->language->get('text_order_id') . ' #' . $order_id);
			}
		}
	}
}