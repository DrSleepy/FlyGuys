<?php
// NOTE: This file handles ALL pages. No need for aboutUs.php (etc) in public folder. 
// That will be handled by routing (core/App.php)

session_start();
require_once '../app/init.php';
$app = new App();
?>