<?php
class Home extends Controller
{

  function index()
  {
    $this->view('home/home-page', '');
  }

}
