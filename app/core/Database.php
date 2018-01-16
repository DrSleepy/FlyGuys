<?php
// PDO Database Class responsibilities:
// Connect to database
// Create prepared statements
// Bind values
// Return rows and result

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
    $dsn = "mysql:host=$this->host;";
    $dsn .= "dbname=$this->dbname";

    // Setting default PDO attributes
    $options = array (
      PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC      
    );

    // Creating PDO instance
    try {
      $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
    } 
    catch(PDOException $err) {
      $this->error = $err->getMessage();
      echo $this->error;
    }
  }
    

}


// PDO instance takes in $dsn, $user, $password
// 
// Statements procedure:
// 1. Save statement in $sql variable (SELECT FROM...)
// 2. Prepare $sql using $stmt = $pdo->prepare($sql)
// 3. Execute statement $stmt->execute(array_assoc)
// 4. Save returned result into variable $users = stmt->fetchAll()

// Fetching Objects in...













?>