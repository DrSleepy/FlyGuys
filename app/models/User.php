<?php
class User implements JsonSerializable{

  private $userID;
  private $password;
  private $email;
  private $lastLogin;
  private $isAdmin;

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

