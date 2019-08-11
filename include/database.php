<?php
 /*$host_name = 'db737328123.db.1and1.com';
  $database = 'db737328123';
  $user_name = 'dbo737328123';
  $password = 'Rm#150620071010';
  $connect = mysqli_connect($host_name, $user_name, $password, $database);

  if (mysqli_errno()) {
    die('<p>Failed to connect to MySQL: '.mysqli_error().'</p>');
  }*/
  /*$pdo = new PDO('mysql:host=db737328123.db.1and1.com;dbname=db737328123', 'dbo737328123', 'password');
  $statement = $pdo->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
  $row = $statement->fetch(PDO::FETCH_ASSOC);
  echo htmlentities($row['_message']);*/
  $mysqli = new mysqli("db737328123.db.1and1.com", "dbo737328123", "Rm#150620071010", "db737328123");
?>
