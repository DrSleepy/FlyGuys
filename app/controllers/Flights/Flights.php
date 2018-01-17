<?php
class Flights extends Controller {
  private $flightModel;

  function __construct() {
    $this->flightModel = $this->model('Flight'); // Controller extention instantiates and returns new model 
  }

  // Default method - Will run if no method is called
  function index($name = ' ') {
    $data = $this->flightModel->getAllFlights();
    $this->view('flights/flights-page', $data);
  }

  function flights() {
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
}

?>