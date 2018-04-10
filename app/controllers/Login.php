<?php

require_once APP_ROOT . '/controllers/Home.php';

class Login {
  private $db;
  private $validation;
  private $homeController;    

  public function __construct() {
    $this->db = new DatabaseAccess;
    $this->validation = new Validation;
    $this->homeController = new Home;    
  }

  public function index() {
    if ($_SESSION['userID']) {
      $this->homeController->index();
      return;
    }
    require_once APP_ROOT . "/views/login/login-page.php";
  }
  
  public function logoutUser() {
    session_destroy();
    echo true;
  }

  public function loginUser() {
    $rules = $this->loginRules();
    $result = $this->validation->validate($_POST, $rules); // validates form and returns result as array
    $validPost = $result[0];

    if(!$validPost){
      echo json_encode($result);
      return;
    }
    
    $user = $this->db->getUserByEmail($_POST['email']);
    $comparePasswords = password_verify($_POST['password'], $user[0]->password);
    if($comparePasswords){
      $_SESSION['userID'] = $user[0]->userID;
      $_SESSION['isAdmin'] = $user[0]->isAdmin;      
    }  

    // echo matches expected response on frontend  
    echo $comparePasswords ? json_encode([ true ]) : json_encode([ false ]);
  }

  private function loginRules() {
    return $rules = [
      "email" => "required|email",
      "password" => "required"
    ];
  }

}











































?>

