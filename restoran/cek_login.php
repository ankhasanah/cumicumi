<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
if(($username=='admin' or $username=='user') && $password=='1234'){
	$_SESSION['login'] = 1;
	$_SESSION['username'] =  $username;
	header('location:a.php');
}
else{
	header('location:login.php');
}
?>