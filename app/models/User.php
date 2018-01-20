<?php
class User
{

  private $db;

  function __construct()
  {
    $this->db = new Database;
  }

  // function findUserByEmail($email) {
  //   echo "EMAIL" . $email;
  // }

  function getUsers()
  {
    $sql = "SELECT * FROM users";
    $this->db->query($sql);
    return $results = $this->db->multiResult();
  }

}

?>