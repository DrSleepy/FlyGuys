<?php
class Register extends Controller {
  private $User;

  function __construct() {
    $this->User = $this->model('User'); // Controller extention instantiates and returns new model 
  }

  // Default method - Will run if no method is called
  function index($name = ' ') {
    $this->view('register/register-page', "ha");
  }

  function register() {
    echo "lol";
    require APP_ROOT . '/controllers/Register/methods/register.php';

    $HTTPMethod = $_SERVER['REQUEST_METHOD'];
    switch ($HTTPMethod) {
      case 'POST': // POST Method - Proccess form
        $data = registerPOST($_POST);
      // If validation success, continue to register user and load view
        print_r($_POST);
        break;

      default:
        $data = registerGET(); // Initialises and returns default (empty) data
        $this->view('Register/Register', $data); //Load view
    }
  }
}

?>