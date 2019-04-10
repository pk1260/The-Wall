<!DOCTYPE html>
<?php
  session_start();
  echo $_SESSION['user_id'];
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="hash.php" method="post">
      <input type="text" name="user_name" placeholder="user name"><br>
      <input type="text" name="first_name" placeholder="first name"><br>
      <input type="text" name="last_name" placeholder="last name"><br>
      <input type="password" name="pwd" placeholder="password"><br>
      <input type="email" name="email" placeholder="email"><br>
      <input type="submit" name="submit" placeholder="submit">
    </form>
  </body>
</html>
