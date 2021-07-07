<?php
//CREATED BY DANIELKAGO 5/7/2021

//initialising variables
$username="";
$email="";

//connect to database
$db=mysqli_connect('localhost','root','','register') or die("could not connect to database");

//register user
$username=mysqli_real_escape_string($db, $_POST['username']);
$email=mysqli_real_escape_string($db, $_POST['email']);
$password_1=mysqli_real_escape_string($db, $_POST['password_1']);
$password_2=mysqli_real_escape_string($db, $_POST['password_2']);

$password = md5($password_1);//Encrypting the password
$query = "INSERT INTO user (username,email,password) VALUES ('$username','$email','$password')";

mysqli_query($db,$query);
$_SESSION['username'] = $username;
$_SESSION['success'] = "You are now registered";

header('location: home.php');
?>