<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ROOT; ?>/css/framework/css/base/base.css ">
  <link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ROOT; ?>/css/main/main.css">
  <title><?php echo SITE_NAME ?></title>
</head>
<body>
<?php 

require APP_ROOT . '/views/includes/nav/nav.php';

// Login test
// $_SESSION['id'] = NULL;
$_SESSION['id'] = "jimmy";

?>