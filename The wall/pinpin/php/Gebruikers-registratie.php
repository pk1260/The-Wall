<?php
  // $password = 'SuP3rGeh13M';
  // $safe_password = password_hash($password, PASSWORD_DEFAULT);
  //
  // echo $safe_password;

  $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
  $password = $_POST['password'];

  $sql = "SELECT 'password' FROM 'users' WHERE 'email' = ?";
  $statement = $database->prepare($sql);
  $result = $statement->query([$email]);
  $password_in_database = $result->fetchColumn();

  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  if($hashed_password = $password_in_database){
    echo "Correct";
  } else{
    echo "False";
  }
?>
