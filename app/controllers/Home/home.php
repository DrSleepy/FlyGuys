<?php
class Home extends Controller
{

  function index($name = '')
  {
    $flight = $this->model('User');
    $this->view('Home/Home', $flight);
  }
}

?>