<?php
    class ModelExtensionModuleCashTransactions extends Model {
        public function add($customer_id, $customer_transaction_id, $description = ""){
            
            $cash_transaction_name = "申請現金";
            $customer_id = $customer_id;
            $status = "pendding";
            
            $query = $this->db->query("INSERT INTO " . DB_PREFIX . "cash_transactions SET cash_transaction_name = '" . $cash_transaction_name . "', customer_id = '" . (int)$customer_id . "', customer_transaction_id = '" . (int)$customer_transaction_id .  "', status = '" . $status . "', description = '" . $description . "', date_added = NOW(), date_modified = NOW()");

            $cash_transaction_id = $this->db->getLastId();

            return $cash_transaction_id;
        }

        public function updateTransactionDescription($customer_transaction_id, $description) {
            //$this->db->query("INSERT INTO " . DB_PREFIX . "customer_transaction SET customer_id = '" . (int)$customer_id . "', order_id = '" . (float)$order_id . "', description = '" . $this->db->escape($description) . "', amount = '" . (float)$amount . "', date_added = NOW()");
            $this->db->query("UPDATE " . DB_PREFIX . "customer_transaction SET description = '" . $this->db->escape($description) . "' WHERE customer_transaction_id = '" . (int)$customer_transaction_id . "'" );
        }
    }