<?php
require_once APP_ROOT . '/controllers/Home.php';

class Register {
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
    require_once APP_ROOT . "/views/register/register-page.php";
  }

  public function registerUser() {
    $rules = $this->registerRules();
    $result = $this->validation->validate($_POST, $rules); // validates form and returns result as array
    $validPost = $result[0];

    if(!$validPost){
      echo json_encode($result);
      return;
    }

    $userIssset = $this->db->register($_POST);
    // autologin after register
    if($userIssset){
      $user = $this->db->getUserByEmail($_POST['email']);
      $_SESSION['userID'] = $user[0]->userID;
    }  

    // echo matches expected response on frontend  
    echo $userIssset ? json_encode([ true ]) : json_encode([ false ]);
  }

  private function registerRules() {
    return $rules = [
      "email" => "required|email|uniqueEmail",
      "email_confirm" => "required|matches:email",
      "password" => "required|min:8|max:30",
      "password_confirm" => "required|matches:password"
    ];
  }

}

?>
