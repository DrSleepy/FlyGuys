<?php
class Flights extends Controller {
  private $flightModel;
  private $cartModel;  
  private $allFlights;

  function __construct() {
    $this->flightModel = $this->model('Flight');
    $this->cartModel = $this->model('Cart');
    $this->loadFlights();
  }

  function index() {
    $this->view('flights/flights-page', $this->allFlights);
  }

  function loadFlights($name = ' ') {
    $this->allFlights = $this->flightModel->getAllFlights();
  }

  function search() {
    require APP_ROOT . '/controllers/Flights/methods/flights.php';

    $HTTPMethod = $_SERVER['REQUEST_METHOD'];
    switch ($HTTPMethod) {
      case 'POST':
        $data = flightsPOST($_POST);
        break;

      default:
        $data = flightsGET();
        $this->view('flights/flights', $data);
    }
  }

  function addToCart(){
    $item = unserialize(base64_decode($_GET['add'])); //Turn back into assoc array
    $this->cartModel->add($item);
    $this->view('flights/flights-page', $this->allFlights);
  }
}

?>