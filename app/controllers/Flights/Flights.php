<?php
class Flights extends Controller
{
  private $flightModel;
  private $cartModel;
  private $allFlights;

  function __construct()
  {
    $this->flightModel = $this->model('Flight');
    $this->cartModel = $this->model('Cart');
    $this->loadFlights();
  }

  function index()
  {
    $this->view('flights/flights-page', $this->allFlights);
  }

  function loadFlights($name = ' ')
  {
    $this->allFlights = $this->flightModel->getAllFlights();
  }

  function flightsPOST($POST)
  {
  // Santaise POST data
    $POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

  // Validation...
  }

  function flightsGET()
  {
    return $data = [
      'email' => '',
      'password' => '',
      'email_err' => '',
      'password_err' => '',
    ];
  }

  function search()
  {

    $HTTPMethod = $_SERVER['REQUEST_METHOD'];
    switch ($HTTPMethod) {
      case 'POST':
        // Run POST method here
        break;

      default:
        $data = flightsGET();
        $this->view('flights/flights', $data);
    }
  }

  function addToCart()
  {
    // $item = unserialize(base64_decode($_GET['add']));
    // $this->cartModel->add($item);
    // $this->view('flights/flights-page', $this->allFlights);
  }

}

?>