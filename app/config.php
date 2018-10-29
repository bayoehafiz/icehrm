<?php
ini_set('error_log', 'data/icehrm.log');

define('APP_NAME', 'Ice Hrm');
define('FB_URL', 'Ice Hrm');
define('TWITTER_URL', 'Ice Hrm');

define('CLIENT_NAME', 'app');
define('APP_BASE_PATH', '/Users/bayoe/Projects/DEMO/icehrm_v24.0.0.OS/core/');
define('CLIENT_BASE_PATH', '/Users/bayoe/Projects/DEMO/icehrm_v24.0.0.OS/app/');
define('BASE_URL','http://icehrm.demo/web/');
define('CLIENT_BASE_URL','http://icehrm.demo/app/');

define('APP_DB', 'demo_icehrm');
define('APP_USERNAME', 'root');
define('APP_PASSWORD', 'Hello123#');
define('APP_HOST', 'localhost');
define('APP_CON_STR', 'mysqli://'.APP_USERNAME.':'.APP_PASSWORD.'@'.APP_HOST.'/'.APP_DB);

//file upload
define('FILE_TYPES', 'jpg,png,jpeg');
define('MAX_FILE_SIZE_KB', 10 * 1024);
