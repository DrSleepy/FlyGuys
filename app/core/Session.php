<?php
// Creates URL & Loads appropriate controller
// URL FORMAT - /controller/method/params

class Session {
  
  function __construct() {
    session_start();

    if (!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = [];
    }
  }

}

?>
 