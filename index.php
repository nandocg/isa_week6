<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Week 6 ISA</title>
</head>
<body>
	<?php
	 require_once('database.php');
	 ?>

	 <h2>Taxi Online</h2>
	 <table>
	 	<tr>
	 		<tr>ID</tr>
	 		<tr>Name</tr>
	 		<tr>License</tr>
	 	</tr>
	 	<?php
	 		$query = "SELECT * FROM driver";
	 		$result = $conn->query($query);
	 		print_r($result);
	 	?>
	 </table>
</body>
</html>