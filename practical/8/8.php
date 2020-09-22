<?php
@include './DBconn.php';

$phoneNo =  mysqli_real_escape_string($conn, $_POST['phonenumber']);
$FirstName =  mysqli_real_escape_string($conn,$_POST['firstname']);
$LastName=  mysqli_real_escape_string($conn, $_POST['lastname']);
$Email=  mysqli_real_escape_string($conn,$_POST['email']);
$Username= mysqli_real_escape_string($conn,$_POST['username']);
$Password= mysqli_real_escape_string($conn,$_POST['password']);

// if (mysqli_connect_error()) {
//     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
//    }
// else {
  if (count($errors) == 0) {
    	$Password = md5($Password_1);

    	$query = "INSERT INTO registration (PhoneNumber , FirstName, LastName,Email ,UserName,Password)
    			  VALUES('$phoneNo', '$FirstName', '$LastName' ,'$Email','$Username','$Password')";
    	mysqli_query($conn, $query);
    	$_SESSION['username'] = $username;
    	$_SESSION['success'] = "You are now logged in";
    	header('location:.././login.html');
    }

// }
 ?>
