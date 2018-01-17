<?php
// PDO Database Class responsibilities:
// Connect to database
// Prepared statements
// Bind values
// Execute query
// Return rows and count

class Database {
  private $host = DB_HOST;
  private $user = DB_USER;
  private $pass = DB_PASS;
  private $dbname = DB_NAME;  

  private $dbh;
  private $stmt;
  private $error;    

  function __construct() {
    // Setting DSN
    $dsn = "mysql:host=$this->host;dbname=$this->dbname";

    // Setting default PDO attributes
    $options = array (
      PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC      
    );

    // Creating PDO instance (and establishing connection to MySQL)
    try {
      $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
    } 
    catch(PDOException $err) {
      $this->error = $err->getMessage();
      echo $this->error;
    }
  }

  // Prepares statment with passed query
  // Prepare does NOT execute statement. Only returns statment object
  function query($sql) {
    $this->stmt = $this->dbh->prepare($sql);
  }

  // Binding value - Setting type of $value
  function bind($param, $value, $type = null) {
    if (is_null($type)){
      switch(true){
        case is_null($value):
          $type = PDO::PARAM_NULL;
          break;
        case is_bool($value):
          $type = PDO::PARAM_BOOL;
          break;
        case is_int($value):
          $type = PDO::PARAM_INT;
          break;
        default:
          $type = PDO::PARAM_STR;
      }
    }

    $this->stmt->bindValue($param, $value, $type);
  }

  // Executes prepared statement
  function execute() {
    return $this->stmt->execute();
  }

  // Gets multiple rows as an associative array
  function multiResult() {
    $this->execute();
    return $this->stmt->fetchAll();
  }

  // Gets single row
  function singleResult() {
    $this->execute();
    return $this->stmt->fetch();
  }

  // Gets row count
  function rowCount() {
    return $this->stmt->rowCount();
  }

}

?>