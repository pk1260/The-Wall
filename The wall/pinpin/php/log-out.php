<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'db.php';
    session_destroy($_SESSION);
    header("Location: ../php/login.php");
  }
?>
