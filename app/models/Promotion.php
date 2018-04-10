<?php
class Promotion implements JsonSerializable{
  
  private $promotionID;
  private $airportID;
  private $expiryDate;


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
