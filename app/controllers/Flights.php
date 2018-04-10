<?php
require_once APP_ROOT . "/controllers/Wishlist.php";

class Flights {
  private $db;

  public function __construct() {
    $this->db = new DatabaseAccess;
  }

  public function index() {
    $airports = $this->db->getAllAirports();
    $promotions = $this->db->getAllPromotions();
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      $this->mutatePOST();
      $flights = $this->db->getSearchedFlights($_POST);
    } else {
      $flights = $this->db->getAllFlights();
    }
    
    foreach ($flights as $flight) {
      foreach ($promotions as $key => $promotion) {
        if($promotion->airportID == $flight->landingID){
          $flight->promoted = true;
          $flight->promotionDate = $promotion->expiryDate;                        
        }
      }
    }


    $wishlistFlights = $this->db->getAllInWishlist();
    $wishlistFlightIDs = Wishlist::getFlightIDsAsArray($wishlistFlights);

    $data = [
      'airports' => $airports,
      'flights' => $flights,
      'wishlistFlightIDs' => $wishlistFlightIDs
    ];

    require_once APP_ROOT . "/views/flights/flights-page.php";
  }

  private function mutatePOST() {
    if($_POST['goingTo'] == 'anywhere'){
      $_POST['goingTo'] = 1;
    }

    if($_POST['dateFrom'] || $_POST['dateTo']){
      $_POST['day'] = 1;
    }else if($_POST['day'] == 'any'){
      $_POST['day'] = 1;
    }

    if(!$_POST['dateFrom']){
      $_POST['dateFrom'] = '0000-00-00';
    }

    if(!$_POST['dateTo']){
      $_POST['dateTo'] = '9999-00-00';
    }
  }

  public function delete() {
    $this->db->deleteFlight($_POST['flightID']);
  }

}

?>
