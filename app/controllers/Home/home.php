<?php
class Home extends Controller
{

  function index($name = '')
  {
    $this->view('home/home-page', "data");
  }

}
