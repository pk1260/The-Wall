<?php
  if(isset($_POST['submit'])){
    include_once 'db.php';
    $frist = mysqli_real_escape_string($conn, $_POST['first_name']);
    $frist = mysqli_real_escape_string($conn, $_POST['last_name']);
    $frist = mysqli_real_escape_string($conn, $_POST['email']);
    $frist = mysqli_real_escape_string($conn, $_POST['uid']);
    $frist = mysqli_real_escape_string($conn, $_POST['pwd']);
  } else {
    header("Location: ../login.php");
    exit();
  }

?>
