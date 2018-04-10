<?php

class Wishlist {
  private $db;

  public function __construct(){
    $this->db = new DatabaseAccess;
  }

  public function index() {
    if(!$_SESSION['userID']){
      return require_once APP_ROOT . "/views/login/login-page.php";
    }

    $flights = $this->db->getAllFromWishlist();
    $promotions = $this->db->getAllPromotions();
    
    $wishlistFlights = $this->db->getAllInWishlist();
    $wishlistFlightIDs = Wishlist::getFlightIDsAsArray($wishlistFlights);

    foreach ($flights as $flight) {
      foreach ($promotions as $key => $promotion) {
        if($promotion->airportID == $flight->landingID){
          $flight->promoted = true;
          $flight->promotionDate = $promotion->expiryDate;                        
        }
      }
    }
    
    $data = [
      'flights' => $flights,
      'wishlistFlightIDs' => $wishlistFlightIDs
     ];
    require_once APP_ROOT . "/views/wishlist/wishlist-page.php";
  }

  public static function getFlightIDsAsArray($AllFlights) {
    $wishlistFlightIDs = [];
    foreach ($AllFlights as $flight) {
      $wishlistFlightIDs[] = $flight['flightID'];
    }
    return $wishlistFlightIDs;
  }
  
  public function addOrRemoveFromWishlist(){
    $this->db->addOrRemoveFromWishlist($_POST['add']);
  }
}

?>

