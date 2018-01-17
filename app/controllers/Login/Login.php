<?php
class Login extends Controller {
  private $userModel;

  function __construct() {
    $this->userModel = $this->model('User'); // Controller inheritance instantiates and returns new model 
  }

  // Default method - Will run if no method is called
  function index($name = ' ') {
    $x = '';
    $this->view('login/login-page', $x);
  }

  function login() {
    require APP_ROOT . '/controllers/Login/methods/login.php';

    $HTTPMethod = $_SERVER['REQUEST_METHOD'];
    switch ($HTTPMethod) {
      case 'POST':
        $data = loginPOST($_POST);
        break;

      default:
        $data = loginGET();
        $this->view('users/login', $data);
    }
  }

}

?>