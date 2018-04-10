<?php
require_once APP_ROOT . "/controllers/Wishlist.php";

class Home {
  private $db;

  public function __construct(){
    $this->db = new DatabaseAccess;
  }

  public function index() {
    $allFlights = $this->db->getAllFlights();
    $promotions = $this->db->getAllPromotions();
    
    $wishlistFlights = $this->db->getAllInWishlist();
    $wishlistFlightIDs = Wishlist::getFlightIDsAsArray($wishlistFlights);

    $flights = [];

    foreach ($allFlights as $flight) {
      foreach ($promotions as $key => $promotion) {
        if($promotion->airportID == $flight->landingID){
          $flight->promoted = true;
          $flight->promotionDate = $promotion->expiryDate;
          $flights[] = $flight;                                                         
        }
      }
    }

    $data = [
      'flights' => $flights,
      'wishlistFlightIDs' => $wishlistFlightIDs
    ];

    require_once APP_ROOT . "/views/home/home-page.php";
  }

}

?>
