<?php 

header('Content-Type: application/json; charset=utf-8');
$query = $_POST["queryphp"];
define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "test");
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if(!$mysqli){die("Connection failed: " . $mysqli->error);}
$query1 = "SELECT * FROM Student where score ".$query.";";

$result1 = $mysqli->query($query1);
$data1 = array();
foreach ($result1 as $row) { $data1[] = $row; }
$posts = array();
$posts[] = array(
	'data1'=> $data1, 
);
$mysqli->close();
print json_encode($posts);
 ?>
