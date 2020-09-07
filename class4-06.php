<?php 
	session_start();
	echo "session id 為:".session_id().'<br>';
	if (!isset($_SESSION['Count'])) {
		$_SESSION['Count'] = 1;
	}else{
		$_SESSION['Count'] ++;
	}
	echo "這是您第{$_SESSION['Count']}次 載入本網頁";
 ?>