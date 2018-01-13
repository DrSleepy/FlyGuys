<?php
// Setting constants which will be accessible from any other file

// Database parameters
define('DB_HOST', 'localhost');
define('DB_USER', 'placeholder');
define('DB_PASS', 'placeholder');
define('DB_NAME', 'placeholder');

// App Root - Used when accessing App folder
define('APP_ROOT', dirname(dirname(__FILE__))); // Sets APP_ROOT to /app folder

// Public Root - Used when accessing Public folder
define('PUBLIC_ROOT', 'http://www.localhost/public');
// define('PUBLIC_ROOT', 'http://kunet.kingston.ac.uk/~k1552351/public');

// Site Name
define('SITE_NAME', 'Fly Guys');

?>