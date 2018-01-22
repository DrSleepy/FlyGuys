<?php
class User
{

  private $db;

  function __construct()
  {
    $this->db = new Database;
  }

  function getUsers()
  {
    $sql = "SELECT * FROM users";
    $this->db->query($sql);
    return $results = $this->db->multiResult();
  }

  function loginValidation()
  {
    // santaise incoming POST    
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $formData = [
      'email' => $_POST['email'],
      'password' => $_POST['password']
    ];

    $formDataErrors = [
      'error' => '',
    ];

    // check if any field in form is empty
    foreach ($formData as $key => $value) {
      if (empty($value)) {
        $formDataErrors['error'] = "Please fill in all fields";
      }
    }

    // password validation
    $formDataErrors['error'] = $this->passwordValidation($formData['password']);
    
    // make sure errors are empty, otherwise set $formSuccess to false
    $formSuccess = true;
    foreach ($formDataErrors as $key => $value) {
      if (!empty($value)) {
        $formSuccess = false;
      }
    }

    $fullForm = array_merge($formData, $formDataErrors);
    print_r(json_encode($fullForm)); //return full form data to ajax call
  }

  function passwordValidation($password)
  {
    $error = '';

    $passwordMinLength = 2;
    if (strlen($password) < $passwordMinLength) {
      $error = "Password must be at least $passwordMinLength characters";
    }
    return $error;
  }

}

?>