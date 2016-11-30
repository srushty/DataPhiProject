<!DOCTYPE HTML>
<html>
<head>
<title>patient form</title>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	<script src="submit.js"></script>
</head>
<body>
	<div class="navbar">
	<ul style="list-style:none;">
	<li><a href="index.html">Submit Details</a></li>
	<li><a href="">Patient Details</a></li>
	</ul>
	</div>
<?php
if(isset($_POST['submitted'])){
	include('connect.php');
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$age=$_POST['age'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$phone=$_POST['phone'];
	$comment=$_POST['comment'];
	
	$insert="INSERT INTO Patient (firstname,lastname,email,age,dob,gender,phone,comment) 
			VALUES('$fname','$lname','$email','$age','$dob','$gender','$phone','$comment')";
	
	if(!mysqli_query($dbcon,$insert)){
		die('error insering!');
	}
}
?>
	<form action="index.php" method="post" id="form1">
	<h3><b>Enter Patient Details</b> </h3><hr>
	(Fields marked <span>*</span> are required.)<br> <br>
	First Name<span>*</span>:
	<input type="text" name="fname" id="fname"/><br><br>
	Last Name:
	<input type="text" name="lname" id="lname"/><br><br>
	Email:
	<input type="email" id="email"><br><br>
	Age<span>*</span>:
	<input type="number" name="age" id="age"/><br><br>
	DOB:
	<input type="date" name="dob" id="dob"/><br><br>
	Gender<span>*</span>:
	<select id="gender">
		<option value="male">male</option>
		<option value="female">female</option>
		<option value="others">others</option>
	</select><br><br>
	Phone<span>*</span>:
	<input type="text" id="phone"/><br><br>
	Comment:
	<textarea rows="4" cols="50" id="tarea"></textarea><br><br>
	<input type="button" value="Submit" id="submit" onclick="submit_value()"/>
	</form>
</body>
</html>	
	
	
	