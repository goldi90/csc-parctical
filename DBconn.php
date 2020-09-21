<?php
$host="localhost";
$username="root";
$pass="";
$db="practical";
$conn= mysqli_connect($host,$username,$pass,$db);
if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
   }
   
?>
