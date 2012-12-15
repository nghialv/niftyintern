<?php
session_start();

if(!isset($_SESSION["USERID"])){
  header("Location: logout.php");
  exit;
}
?>
<a href="logout.php">Logout</a>
