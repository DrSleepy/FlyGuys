<?php
class Flights extends Controller
{
  private $Flight;

  function __construct()
  {
    $this->Flight = $this->model('Flight'); // Controller extention instantiates and returns new model 
  }

  // Default method - Will run if no method is called
  function index($name = ' ')
  {
    $this->view('flights/flights', "default data passed here");
  }

  function flights()
  {
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