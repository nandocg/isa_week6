<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Week 6 ISA</title>
	<style>
		table,td,th{
			border: 1px solid black;
			border-collapse: collapse;
			text-align: center;
		}
		
		table{
			width: 80%;
			margin: auto;
		}
		td{
			padding: 10px;
		}
		tr:nth-child(even)
		{
			background: beige;
		}

	</style>
</head>
<body>
	<?php
	 require_once('database.php');
	 ?>

	 <h2 style="text-align: center;">Taxi Online</h2>
	 <table>
	 	<tr>
	 		<th>ID</th>
	 		<th>Name</th>
	 		<th>License</th>
	 	</tr>
	 	<?php
	 		$query = "SELECT * FROM Driver";
	 		$result = $conn->query($query);
	 		if($result)
	 		{
	 			while($rows = $result->fetch_assoc())
	 			{
	 				echo "<tr><td>".$rows['id']."</td><td>".$rows['name']."</td><td>".$rows['license']."</td></tr>";
	 			}
	 		}
	 		
	 	?>
	 </table>
</body>
</html>