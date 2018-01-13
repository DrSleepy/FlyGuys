<?
// File responsibilities:
// Handles all HTTP Methods (GET, POST, PUT etc) for 'register' function in controllers/Users/Users.php

function loginPOST($POST)
{
  // Santaise POST data
  $POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

  

  // Validation...
}

function loginGET()
{
  return $data = [
    'email' => '',
    'password' => '',
    'email_err' => '',
    'password_err' => '',
  ];
}

?>