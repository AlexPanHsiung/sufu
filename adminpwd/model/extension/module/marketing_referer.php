<?php
    class ModelExtensionModuleMarketingReferer extends Model {
        public function install(){
            $this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "marketing_referer (
                marketing_referer_id INT(11) UNSIGNED NOT NULL auto_increment,
                marketing_id INT(11) UNSIGNED NOT NULL DEFAULT '0',
                referer VARCHAR(100) NOT NULL DEFAULt '',
                clicks INT(11) NOT NULL DEFAULT '0',
                description TEXT NOT NULL,
                date_added DATETIME NOT NULL,
                PRIMARY KEY (marketing_referer_id)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8");
        }

        public function uninstall(){
            $this->db->query("DROP TABLE IF EXISTS " . DB_PREFIX . "marketing_referer");
        }
    }