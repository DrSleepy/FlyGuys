<?php
class Register extends Controller
{
  private $User;

  function __construct()
  {
    $this->User = $this->model('User'); // Controller extention instantiates and returns new model 
  }

  // Default method - Will run if no method is called
  function index()
  {
    $this->view('register/register-page', '');
  }

  function register()
  {
    $HTTPMethod = $_SERVER['REQUEST_METHOD'];
    switch ($HTTPMethod) {
      case 'POST': 
        // Run POST method here
        break;

      default:
        $this->view('Register/Register', "data");
    }
  }

  function registerPOST($POST)
  {
  // Santaise POST data
    $POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $data = [
      'name' => trim($POST['name']),
      'email' => trim($POST['email']),
      'password' => trim($POST['password']),
      'password_confirm' => trim($POST['password_confirm']),
      'name_err' => '',
      'email_err' => '',
      'password_err' => '',
      'password_confirm_err' => ''
    ];

  // Validation...
  }

  function registerGET()
  {
    return $data = [
      'name' => '',
      'email' => '',
      'password' => '',
      'password_confirm' => '',
      'name_err' => '',
      'email_err' => '',
      'password_err' => '',
      'password_confirm_err' => ''
    ];
  }
}

?>