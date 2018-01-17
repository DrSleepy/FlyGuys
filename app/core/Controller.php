<?php
// Base controller

class Controller {

  // Load model  
  function model($model) {
    require_once APP_ROOT . "/models/$model.php";
    return new $model();
  }

  // Load view
  function view($view, $data = []) {
    require_once APP_ROOT . "/views/$view.php";
  }

}
?>