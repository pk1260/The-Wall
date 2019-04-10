<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    include 'db.php';

    $user = filter_var($_POST['user_name'], FILTER_SANITIZE_STRING);
    $pwd = filter_var($_POST['pwd'], FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM `users` WHERE `user_name` = ?";
    $statement = $conn->prepare($sql);
    $result = $statement->execute([$user]);
    $user = $statement->fetch();

    if(password_verify($pwd, $user['pwd'])){
      $_SESSION['user_id'] = $user['id'];
      print_r($_SESSION);
    }
  } else {
      echo "Failed login";
  }
?>
