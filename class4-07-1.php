<?php
	session_start();

	$account = $_POST["username"]; 
	$password = $_POST["password"];
	session_start();

	$_SESSION['account'] = $account;
	$_SESSION['password'] = $password;
	header('Location:class4-07-2.php');

 ?>