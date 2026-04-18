<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $myusername = mysqli_real_escape_string($db, $_POST['susername']);
   $mypassword = mysqli_real_escape_string($db, $_POST['spassword']);
   $myfname = mysqli_real_escape_string($db, $_POST['sfname']);
   $sql = "INSERT INTO bankdetails (fname, username, password)
        VALUES ('$myfname', '$myusername', '$mypassword')";
   $result = mysqli_query($db, $sql);
   header("location: login.html");
}
