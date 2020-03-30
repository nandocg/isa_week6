<?php
$host = getenv("MYSQL_SERVICE_HOST");
$username = 'root';
$password = "clouddb";
$dbname = "mydb";
$conn = new mysqli($host,$username,$password,$dbname);
if($conn->connect_error){
	echo "Connection error";
	die();
}
?>