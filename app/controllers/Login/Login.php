<?php
class Login extends Controller
{
  private $User;

  function __construct()
  {
    $this->User = $this->model('User'); // Controller extention instantiates and returns new model 
  }

  // Default method - Will run if no method is called
  function index($name = ' ')
  {
    $this->view('Login/Login', "ha");
  }

  function login()
  {
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