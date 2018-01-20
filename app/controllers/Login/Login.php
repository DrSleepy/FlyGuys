<?php
class Login extends Controller
{
  private $userModel;

  function __construct()
  {
    $this->userModel = $this->model('User'); // Controller inheritance instantiates and returns new model 
  }

  // Default method - Will run if no method is called
  function index($name = ' ')
  {
    $x = '';
    $this->view('login/login-page', $x);
  }

  function login()
  {
    $HTTPMethod = $_SERVER['REQUEST_METHOD'];
    switch ($HTTPMethod) {
      case 'POST':
        // Run POST method here
        break;

      default:
        $data = loginGET();
        $this->view('users/login', $data);
    }
  }

  function loginPOST($POST)
  {
  // Santaise POST data
    $POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

  

  // Validation...
  }

  function loginGET()
  {
    return $data = [
      'email' => '',
      'password' => '',
      'email_err' => '',
      'password_err' => '',
    ];
  }

}

?>