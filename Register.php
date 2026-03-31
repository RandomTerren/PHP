<!DOCTYPE html>
<html  lang="en">
	
<head>

<?php include 'dbconnect.php'; ?>

<?php

session_start();

?>

</head>

<body>

<form action="RegTarget.php" method="POST">

<label for="CustName">Name:</label><br>

<input type="text" name="custname"><br>

<label for="CustEmail">Email:</label><br>

<input type="text" name="custemail"><br>

<label for="CustPhone">Phone:</label><br>

<input type="text" name="custphone"><br>

<label for="Username">Username:</label><br>

<input type="text" name="username"><br>

<label for="Password">Password:</label><br>

<input type="text" name="password"><br>

<input type="submit" value="Submit">

</form>


</form>

</body>

</html>