<!DOCTYPE HTML>
<html>
<head>
<title>Patient details</title>
	<link type="text/css" rel="stylesheet" href="stylesheet1.css"/>
</head>
<body>
<h3>Patient Details</h3><hr></hr>
<?php
	include('connect.php');
	$sqlget= "SELECT * FROM patient";
	$sqldata=mysqli_query($dbcon,$sqlget);
	echo "<table>";
	echo "<tr><th>ID</th>
		<th>first name</th>
		<th>last name</th>
		<th>email</th>
		<th>age</th>
		<th>dob</th>
		<th>gender</th>
		<th>phone</th>
		<th>comment</th></tr>";
	while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC())){
		echo "<tr><td>";
		echo $row['id'];
		echo "</td><td>";
		echo $row['firstname'];
		echo "</td><td>";
		echo $row['lastname'];
		echo "</td><td>";
		echo $row['email'];
		echo "</td><td>";
		echo $row['age'];
		echo "</td><td>";
		echo $row['dob'];
		echo "</td><td>";
		echo $row['gender'];
		echo "</td><td>";
		echo $row['phone'];
		echo "</td><td>";
		echo $row['comment'];
		echo "</td></tr>";
	}
	echo "</table>";
?>
</body>
</html>