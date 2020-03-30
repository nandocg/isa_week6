<?php
$host = '127.0.0.1';#getenv("MYSQL_SERVICE_HOST");
$username = 'root';
$password = "ubayaweek6";
$dbname = "mydb";
$conn = new mysqli($host,$username,$password,$dbname);
if($conn->connect_error){
	echo "Connection error";
	die();
}
?>