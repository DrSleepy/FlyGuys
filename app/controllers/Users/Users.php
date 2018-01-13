<?php
class Users extends Controller
{
  private $User;

  function __construct()
  {
    $this->User = $this->model('User'); // Controller extention instantiates and returns new model 
  }

  // Default method - Will run if no method is called
  function index($name = ' ')
  {
    // $this->User->findUserByEmail("yep");
    $this->view('home/home', "ha");
  }

  function register()
  {
    require APP_ROOT . '/controllers/Users/methods/register.php';

    $HTTPMethod = $_SERVER['REQUEST_METHOD'];
    switch ($HTTPMethod) {
      case 'POST': // POST Method - Proccess form
        $data = registerPOST($_POST);
      // If validation success, continue to register user and load view
        print_r($_POST);
        break;

      default:
        $data = registerGET(); // Initialises and returns default (empty) data
        $this->view('users/register', $data); //Load view
    }
  }

  function login()
  {
    require APP_ROOT . '/controllers/Users/methods/login.php';

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