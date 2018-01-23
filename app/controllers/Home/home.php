<?php
class Home extends Controller
{

  function __construct()
  {

    $password = "EEEEEEEEEE1";
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $isPassword = password_verify('abc', $hashedPassword);

    echo $hashedPassword;
    echo " ---- ";

    if ($isPassword) {
      echo " LEGIT ";
    } else {
      echo " fail ";
    }

  }

  function index()
  {
    $this->view('home/home-page', '');
  }

}
