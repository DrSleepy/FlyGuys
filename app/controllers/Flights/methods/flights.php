<?php
// File responsibilities:
// Handles all HTTP Methods (GET, POST, PUT etc) for 'register' function in controllers/Users/Users.php

function flightsPOST($POST) {
  // Santaise POST data
  $POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

  
  // Validation...
}

function flightsGET() {
  return $data = [
    'email' => '',
    'password' => '',
    'email_err' => '',
    'password_err' => '',
  ];
}

?>