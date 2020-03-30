<?php
$host = 'localhost';#getenv("MYSQL_SERVICE_HOST");
$username = 'root';
$password = "";
$dbname = "mydb";
$conn = new mysqli($host,$username,$password,$dbname);
if($conn->connect_error){
	echo "Connection error";
	die();
}
?>