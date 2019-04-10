<?php
$host = "localhost";
$username   = "root";
$password   = "";
$dbname     = "loginsystem";
$option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
$dsn = "mysql:host=$host;dbname=$dbname";

try {
  $conn = new PDO($dsn,$username,$password,$option);
  
} catch(PDOException $error){
  echo "Can't connecnt you cunt " . $error->getMessage();
}
?>
