<?php
class Home extends Controller {
<<<<<<< HEAD
=======

>>>>>>> 3830f315ae8f6defcf7c696be72b8f4f1bb61315
  function index($name = '') {
    $flight = $this->model('User');
    $this->view('home/home-page', $flight);
  }
  
}

?>