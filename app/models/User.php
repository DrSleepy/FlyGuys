<?php
class User
{

  private $db;

  function __construct()
  {
    $this->db = new Database;
  }

  function getUsers()
  {
    $sql = "SELECT * FROM users";
    $this->db->query($sql);
    return $results = $this->db->multiResult();
  }

}

?>