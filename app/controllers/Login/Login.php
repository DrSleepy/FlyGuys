<?php
class Login extends Controller
{
  private $userModel;
  private $validationModel;

  function __construct()
  {
    $this->userModel = $this->model('User');
    $this->validationModel = $this->model('Validation');
  }

  function index()
  {
    $this->view('login/login-page', '');
  }

  function loginUser()
  {
    $rules = $this->userModel->loginRules(); // returns rules for login form
    $result = $this->validationModel->validate($_POST, $rules); // validates form and returns result as array
    echo json_encode($result);
  }

}

?>
