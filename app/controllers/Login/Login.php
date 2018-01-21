<?php
class Login extends Controller
{
  private $userModel;

  function __construct()
  {
    $this->userModel = $this->model('User');
  }

  function index()
  {
    $this->view('login/login-page', '');
  }

  function loginValidation()
  {
    $this->userModel->loginValidation();
  }

}

?>
