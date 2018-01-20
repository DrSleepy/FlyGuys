<?php
class Flight
{

  private $db;

  function __construct()
  {
    $this->db = new Database;
  }

  function getAllFlights()
  {
    $sql = "SELECT * FROM flights";
    $this->db->query($sql);
    return $this->db->multiResult();
  }

  function singleFlight($id)
  {
    $sql = "SELECT * FROM flights WHERE id = $id";
    $this->db->query($sql);
    return $this->db->singleResult();
  }
}

?>