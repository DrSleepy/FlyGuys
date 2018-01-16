<?php
class User {

  private $db;

  function __construct() {
    $this->db = new Database;
  }

  function findUserByEmail($email) {
    echo "EMAIL" . $email;
  }

}

?>