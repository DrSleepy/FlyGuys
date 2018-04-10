<?php
class Airport implements JsonSerializable {
  
  private $airportID;
  private $location;
  private $lifts;
  private $type;

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
