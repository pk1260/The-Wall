<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = array();

    include 'db.php';

    $first = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
    $last = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $hash = filter_var($_POST['pwd'], FILTER_SANITIZE_STRING);
    $user_name = filter_var($_POST['user_name'], FILTER_SANITIZE_STRING);

    $pwd = password_hash($hash, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `pwd`, `user_name`) VALUES (?,?,?,?,?)";
    $statement = $conn->prepare($sql);
    $data = array($first,$last,$email,$pwd,$user_name);

    $statement->execute($data);
  } else {
    header("Location: ../register.php");
    exit();
  }
?>
