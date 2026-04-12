<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $loginuser = $_SESSION['login_user'];
  $signature = $_POST['ll'];
  $sql = "Update bankdetails set sign = '$signature' where username = '$loginuser' ";
  $result = mysqli_query($db, $sql);
  header("location: Userfrontend.php");
}
