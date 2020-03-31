<?php
$host = getenv('MYSQL_SERVICE_HOST');
$username = 'root';
$password = 'ubaya';
$dbname = 'databaseku';
$conn = new mysqli($host,$username,$password,$dbname);
if($conn->connect_error){
	echo "Connection error";
	die();
}
?>
