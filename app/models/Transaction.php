<?php
class Transaction implements JsonSerializable{

  private $transactionID;
  private $flightID;
  private $userID;
  private $promotionID;
  private $transactionTime;
  private $cost;

  function __get($name) {
    return $this->$name;
  }

  function __set($name,$value) {
    $this->$name = $value;
  }

  public function jsonSerialize()
  {
    return get_object_vars($this);
    //gets all content
  }


}
?>
