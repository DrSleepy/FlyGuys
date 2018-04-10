<?php
require_once APP_ROOT . "/controllers/Home.php";
require_once APP_ROOT . "/controllers/Flights.php";


class Dashboard {
  private $db;      
  private $homeController;
  private $flightController;  

  public function __construct() {
    $this->db = new DatabaseAccess;    
    $this->homeController = new Home; 
    $this->flightController = new Flights;     
  }

  public function index() {
    if (!$_SESSION['isAdmin']) {
      $this->homeController->index();
      return;
    }

    if(isset($_POST['destination-name-create'])){
      $this->db->createDestination($_POST['destination-name-create'], $_POST['destination-type']);
    } elseif(isset($_POST['destination-name-delete'])){
      $this->db->deleteDestination($_POST['destination-name-delete']);
    } elseif(isset($_POST['promotion-destination'])){
      $this->db->createPromotion($_POST['promotion-destination'], $_POST['promotion-date']);
    } elseif(isset($_POST['new-flight-price'])){
      $this->db->createFlight($_POST);
    }elseif(isset($_POST['update-flight'])){
      $this->db->updateFlight($_POST);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      $_SERVER['REQUEST_METHOD'] = 'GET';
      $this->flightController->index();  
      return;   
    }

    $latestFlights = $this->db->getLatestFlights();
    $airports = $this->db->getAllAirports();    

    $data = [ 
      'airports' => $airports,
      'latestFlights' => $latestFlights
     ];

    require_once APP_ROOT . "/views/dashboard/dashboard-page.php";
  }
}

?>

