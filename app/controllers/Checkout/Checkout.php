<?php
class Checkout extends Controller
{
  private $Flight;

  function __construct()
  {
    $this->Flight = $this->model('Flight'); // Controller extention instantiates and returns new model 
  }

  // Default method - Will run if no method is called
  function index($name = ' ')
  {
    $this->view('Checkout/Checkout', "default data passed here");
  }

}

?>