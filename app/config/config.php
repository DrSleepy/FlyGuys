<?
// Setting constants which will be accessible from any other file

// Database parameters
define('DB_HOST', 'localhost');
define('DB_USER', 'placeholder');
define('DB_PASS', 'placeholder');
define('DB_NAME', 'placeholder');

// App Root - Used when accessing App folder
define('APP_ROOT', str_replace("\\", "/", dirname(__FILE__, 2))); // same as const APPROOT = 'E:\Username\Desktop\project\app'

// Public Root - Used when accessing Public folder
define('PUBLIC_ROOT', 'http://www.localhost/public');

// Site Name
define('SITE_NAME', 'Fly Guys');

?>