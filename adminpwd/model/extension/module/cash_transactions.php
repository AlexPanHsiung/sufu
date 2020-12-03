<?php
    class ModelExtensionModuleCashTransactions extends Model {
        public function install() {
            $this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "cash_transactions (
                cash_transaction_id INT(11) UNSIGNED NOT NULL auto_increment,
                cash_transaction_name VARCHAR(100) NOT NULL DEFAULt '',
                customer_id INT(11) UNSIGNED NOT NULL DEFAULT '0',
                customer_transaction_id INT(11) UNSIGNED NOT NULL DEFAULT '0',
                status VARCHAR(100) NOT NULL DEFAULT 'pendding',
                description TEXT NOT NULL,
                date_added DATETIME NOT NULL,
                date_modified DATETIME NOT NULL,
                PRIMARY KEY (cash_transaction_id)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8");
        }

        public function getCustomerTransactionById($customer_transaction_id){
            $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer_transaction WHERE customer_transaction_id = '" . (int)$customer_transaction_id . "' ORDER BY date_added DESC");

            return $query->row;
        }

        public function getTransactionById($cash_transaction_id){
            $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "cash_transactions` WHERE cash_transaction_id='" . $cash_transaction_id . "'");

            return $query->row;
        }

        public function getTransactions($data = array()){

            $sql = "SELECT cash.cash_transaction_id, cash.customer_id, cash.customer_transaction_id, cash.status, cash.description, t.amount, cash.date_added, cash.date_modified, CONCAT(customer.firstname, ' ', customer.lastname) AS customer FROM `" . DB_PREFIX . "cash_transactions` cash, `" . DB_PREFIX . "customer` customer, `" . DB_PREFIX . "customer_transaction` t WHERE cash.customer_id=customer.customer_id AND cash.customer_transaction_id=t.customer_transaction_id";
            
            /*
            if (!empty($data['filter_order_status'])) {
                $implode = array();
    
                $order_statuses = explode(',', $data['filter_order_status']);
    
                foreach ($order_statuses as $order_status_id) {
                    $implode[] = "o.order_status_id = '" . (int)$order_status_id . "'";
                }
    
                if ($implode) {
                    $sql .= " WHERE (" . implode(" OR ", $implode) . ")";
                }
            } elseif (isset($data['filter_order_status_id']) && $data['filter_order_status_id'] !== '') {
                $sql .= " WHERE o.order_status_id = '" . (int)$data['filter_order_status_id'] . "'";
            } else {
                $sql .= " WHERE o.order_status_id > '0'";
            }
            */
    
            if (!empty($data['filter_cash_transaction_id'])) {
                $sql .= " AND cash_transaction_id = '" . (int)$data['filter_cash_transaction_id'] . "'";
            }
    
            if (!empty($data['filter_customer'])) {
                $sql .= " AND CONCAT(firstname, ' ', lastname) LIKE '%" . $this->db->escape($data['filter_customer']) . "%'";
            }

            if(!empty($data['filter_status'])){
                $sql .= " AND cash.status = '" . $data['filter_status'] . "'";
            }
    
            if (!empty($data['filter_date_added'])) {
                $sql .= " AND DATE(cash.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
            }
    
            if (!empty($data['filter_date_modified'])) {
                $sql .= " AND DATE(cash.date_modified) = DATE('" . $this->db->escape($data['filter_date_modified']) . "')";
            }
    
            if (!empty($data['filter_total'])) {
                $data['filter_total'] = - abs($data['filter_total']);
                $sql .= " AND t.amount = '" . (float)$data['filter_total'] . "'";
            }

            $sort_data = array(
                'cash.cash_transaction_id',
                'customer',
                'cash.status',
                'cash.date_added',
                'cash.date_modified',
                't.amount'
            );
    
            if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
                $sql .= " ORDER BY " . $data['sort'];
            } else {
                $sql .= " ORDER BY cash.cash_transaction_id";
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
            /*
            SELECT * FROM `oc_customer`, `oc_customer_affiliate`, `oc_cash_transactions` 
                LEFT JOIN `oc_cash_transactions` ON `oc_cash_transactions`.customer_id=`oc_customer`.customer_id
                LEFT JOIN `oc_customer_affiliate` ON `oc_cash_transactions`.customer_id=`oc_customer_affiliate`.customer_id
            */
        }

        public function getTotalTransactions($data = array()) {
            $sql = "SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "cash_transactions` cash, `" . DB_PREFIX . "customer` customer , `" . DB_PREFIX . "customer_transaction` t WHERE cash.customer_id=customer.customer_id AND cash.customer_transaction_id=t.customer_transaction_id";
    
            /*
            if (!empty($data['filter_order_status'])) {
                $implode = array();
    
                $order_statuses = explode(',', $data['filter_order_status']);
    
                foreach ($order_statuses as $order_status_id) {
                    $implode[] = "order_status_id = '" . (int)$order_status_id . "'";
                }
    
                if ($implode) {
                    $sql .= " WHERE (" . implode(" OR ", $implode) . ")";
                }
            } elseif (isset($data['filter_order_status_id']) && $data['filter_order_status_id'] !== '') {
                $sql .= " WHERE order_status_id = '" . (int)$data['filter_order_status_id'] . "'";
            } else {
                $sql .= " WHERE order_status_id > '0'";
            }
            */
    
            if (!empty($data['filter_cash_transaction_id'])) {
                $sql .= " AND cash_transaction_id = '" . (int)$data['filter_cash_transaction_id'] . "'";
            }
    
            if (!empty($data['filter_customer'])) {
                $sql .= " AND CONCAT(firstname, ' ', lastname) LIKE '%" . $this->db->escape($data['filter_customer']) . "%'";
            }

            if(!empty($data['filter_status'])){
                $sql .= " AND cash.status = '" . $data['filter_status'] . "'";
            }
    
            if (!empty($data['filter_date_added'])) {
                $sql .= " AND DATE(cash.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
            }
    
            if (!empty($data['filter_date_modified'])) {
                $sql .= " AND DATE(cash.date_modified) = DATE('" . $this->db->escape($data['filter_date_modified']) . "')";
            }
    
            if (!empty($data['filter_total'])) {
                $data['filter_total'] = - abs($data['filter_total']);
                $sql .= " AND t.amount = '" . (float)$data['filter_total'] . "'";
            }
    
            $query = $this->db->query($sql);
    
            return $query->row['total'];
        }

        public function add(){

        }

        public function updataStatus($cash_transaction_id, $status){
            $query = $this->db->query("UPDATE `" . DB_PREFIX . "cash_transactions` SET status='" . $status . "', date_modified=NOW() WHERE cash_transaction_id='" . $cash_transaction_id . "'");
        }

    }

?>