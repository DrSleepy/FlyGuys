<?php
require_once APP_ROOT . '/controllers/Flights.php';

class Checkout {
  private $db;
  private $validation;
  private $flightsController;

  public function __construct(){
    $this->db = new DatabaseAccess;
    $this->validation = new Validation;
    $this->flightsController = new Flights;
  }

  public function index() {
    if (!$_SESSION['userID']) {
      return require_once APP_ROOT . "/views/login/login-page.php";
    } else if (count($_SESSION['cart']) < 1) {
      $this->flightsController->index();
    } else {
      $data = $this->db->getCustomerDetails($_SESSION['userID']); 
      $customer = $data[0];
      require_once APP_ROOT . "/views/checkout/checkout-page.php";
    }
  }

  public function checkoutUser() {
    $rules = $this->checkoutRules();
    $result = $this->validation->validate($_POST, $rules); // validates form and returns result as array
    $validPost = $result[0];

    if(!$validPost){
      echo json_encode($result);
      return;
    }

    $this->db->checkout($_POST, $_SESSION['userID']);
    echo json_encode($result);
  }

  private function checkoutRules() {
    return $rules = [
      "first_name" => "required|alphabetical",
      "last_name" => "required|alphabetical",
      "home_number" => "required|numerical|telephone",
      "mobile_number" => "required|numerical|telephone",
      "address" => "required",
      "town_city" => "required|alphabetical",
      "postcode" => "required|postcode",
      "country" => "required|alphabetical"
    ];
  }

}

?>

