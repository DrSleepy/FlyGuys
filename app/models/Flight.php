<?php

class Flight implements JsonSerializable{

  private $flightID;
  private $price;
  private $flightClass;
  private $flightDate;
  private $departureTime;
  private $landingTime;
  private $departureID;
  private $landingID;
  private $returnID;

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

