<?php
require_once APP_ROOT . '/controllers/Flights.php';

class Carts {
  private $db;
  
  public function __construct(){
    $this->db = new DatabaseAccess;
  }

  public function add() {
    $flight = json_decode($_POST['flight']);
    $_SESSION['cart'][] = $flight;
  }

  public function remove() {
    foreach ($_SESSION['cart'] as $key => $value){
      if($_POST['flightID'] == $value->flightID){
        unset($_SESSION['cart'][$key]); 
        echo true;
        return;
      }
    }
    echo false;
  }

  // Only to be used when displaying price in cart  
  public function totalPriceSession() {
    $totalPrice = 0;
    if(count($_SESSION['cart']) < 1){
      echo $totalPrice;
      return;
    }

    foreach ($_SESSION['cart'] as $flight){
      $totalPrice += $flight->price;
    }
    echo $totalPrice;
  }

  // Only to be used when showing total price on checkout form
  public function totalPriceDatabase() {
    $flightIDs = [];
    foreach ($_SESSION['cart'] as $flight){
      $flightIDs[] = $flight->flightID;
    }
    $totalPrice = $this->db->totalPrice($flightIDs);
    echo json_encode($totalPrice);
  }

}

?>

