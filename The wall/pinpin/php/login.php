<?php
session_start();
echo $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="log-in.php" method="post">
      <input type="text" name="user_name" placeholder="user name"><br>
      <input type="password" name="pwd" placeholder="password"><br>
      <input type="submit" name="submit" placeholder="submit">
    </form>
  </body>
</html>
