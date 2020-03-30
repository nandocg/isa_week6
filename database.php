<?php
$host = 'localhost';
$username = 'root';
$password = "cloudweek6";
$dbname = "mydb";
$conn = new mysqli($host,$username,$password,$dbname);
if($conn->connect_error){
	echo "Connection error";
	die();
}
?>