<?php 
	session_start();
	if ($_SESSION['account'] == 'user' && $_SESSION['password'] == 'password') {
		echo '登入成功';
	}else{
		header('Location:class4-07.php');


	}
 ?>