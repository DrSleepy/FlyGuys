<?php
class Customer implements JsonSerializable {

  private $userID;
  private $firstName;
  private $surName;
  private $address;
  private $address_optional;
  private $town_city;
  private $country;
  private $postcode;
  private $mobile_number;
  private $home_number;

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
