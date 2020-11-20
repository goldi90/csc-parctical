<?php
include ('../DBconn.php');

$name= mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$query = "INSERT INTO data (name , email)
      VALUES('$name', '$email')";
mysqli_query($conn, $query);
echo "submbited";
header('Location:GetData.php');
 ?>
