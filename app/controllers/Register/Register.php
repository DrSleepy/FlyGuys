<?php
class Register extends Controller
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
    $this->view('register/register-page', '');
  }

  function registerUser()
  {
    $rules = $this->userModel->registerRules(); // returns rules for register form
    $result = $this->validationModel->validate($_POST, $rules); // validates form and returns result as array
    echo json_encode($result);
  }

}

?>
