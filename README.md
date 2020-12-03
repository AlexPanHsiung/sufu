# 歡迎使用 ！
## Setup
###### 1.clone完之後請在根目錄下新增config.php檔案：
```
<?php
// HTTP
define('HTTP_SERVER', 'http://yourhttp/domain/');

// HTTPS
define('HTTPS_SERVER', 'https://yourhttps/domain/');

// DIR
define('DIR_APPLICATION', '/your/www/path/catalog/');
define('DIR_SYSTEM', '/your/www/path/system/');
define('DIR_IMAGE', '/your/www/path/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'tmp/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'vegedenc_sufu_meho');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
```
###### 2.接著在adminpwd資料夾內新增config.php檔案：
```
<?php
// HTTP
define('HTTP_SERVER', 'http://yourhttp/domain/adminpwd/');
define('HTTP_CATALOG', 'http://yourhttp/domain/');

// HTTPS
define('HTTPS_SERVER', 'https://yourhttp/domain/adminpwd/');
define('HTTPS_CATALOG', 'https://yourhttps/domain/');

// DIR
define('DIR_APPLICATION', '/your/www/path/adminpwd/');
define('DIR_SYSTEM', '/your/www/path/system/');
define('DIR_IMAGE', '/your/www/path/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'tmp/storage/');
define('DIR_CATALOG', '/your/www/path/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');// supremel_sufu_test
define('DB_PASSWORD', ''); // Q[AVw{VpxO14
define('DB_DATABASE', 'vegedenc_sufu_meho');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
```
###### 3.開啟網頁，開始coding
