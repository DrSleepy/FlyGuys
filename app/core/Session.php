<?php
class Session {
  
  function __construct() {
    session_start();

    if (!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = [];
    }

  }

}
?>
 