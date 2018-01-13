<?php
// Base controller
// Loads models and views

class Controller
{
  function model($model)
  {
    require_once APP_ROOT . "/models/$model.php";
    return new $model();
  }

  function view($view, $data = [])
  {
    require_once APP_ROOT . "/views/$view.php";
  }
}
?>