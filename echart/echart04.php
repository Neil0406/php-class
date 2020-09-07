<?php 
	header('Content-Type: application/json; charset=utf-8');
	define("DB_HOST", "localhost");
	define("DB_USERNAME", "");
	define("DB_PASSWORD", "");
	define("DB_NAME", "test");
	//php 和mysql互動的function
	// new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
	$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
	if(!$mysqli){die("Connection failed: " . $mysqli->error);}
	$query1 = "SELECT * FROM Student";

	$result1 = $mysqli->query($query1);

	$data1 = array();

	foreach ($result1 as $row) {
		$data1[] = $row;
	}
	$posts = array();
	$posts[] = array(
		'data1' => $data1,
	);
	$mysqli->close();
	print json_encode($posts);

 ?>