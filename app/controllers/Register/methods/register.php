<?php
// File responsibilities:
// Handles all HTTP Methods (GET, POST, PUT etc) for 'register' function in controllers/Users/Users.php

function registerPOST($POST) {
  // Santaise POST data
  $POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

  $data = [
    'name' => trim($POST['name']),
    'email' => trim($POST['email']),
    'password' => trim($POST['password']),
    'password_confirm' => trim($POST['password_confirm']),
    'name_err' => '',
    'email_err' => '',
    'password_err' => '',
    'password_confirm_err' => ''
  ];

  // Validation...
}

function registerGET() {
  return $data = [
    'name' => '',
    'email' => '',
    'password' => '',
    'password_confirm' => '',
    'name_err' => '',
    'email_err' => '',
    'password_err' => '',
    'password_confirm_err' => ''
  ];
}

?>