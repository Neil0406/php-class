<?php
	session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>會員登入</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<style>
	form {
		border: #aaa solid 1px;
		margin: 20px auto;
		padding: 30px;
		width: 300px;

	}
	.error {
		color: red;
	}
</style>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col text-center mt-5">
				<div class="mt-3 mb-4">
					<h1><b>霸王龍登入介面</b> - V1</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-4 offset-4 text-center">
			<form method="post" action="class4-07-1.php">
				<div class="form-group">
					<label for="exampleInputEmail1">霸王帳號</label>
					<input class="form-control" type="text" name="username">
					<small id="emailHelp" class="form-text text-muted">請輸入霸王帳號</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">霸王密碼</label>
					<input class="form-control" type="password" name="password">
					<small id="emailHelp" class="form-text text-muted">請輸入霸王密碼</small>
				</div>
				<button class="btn btn-primary" type="submit">霸王登入</button>
			</form>
		</div>
	</div>
		
	</body>
</html>
