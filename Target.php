<!DOCTYPE html>
<html  lang="en">
	
<head>

<?php include 'dbconnect.php'; ?>

<?php

session_start();

?>


</head>

<body>

	<?php
	
		$Username = $_POST["username"];
		
		$Password = $_POST["password"];
	?>
	
	<h2>PHP Form Target Page</h2>
	
	<?php 
	
	echo $Username . "<br>";
	
	echo $Password . "<br><br>"; 

	$sql = "select * from userandpass where Username = '" . $Username . "' and password = '" . $Password . "'; ";
	
	echo $sql . "<br>";
	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	
		echo "You are logged in!<br>";
		
		$row = $result->fetch_assoc();

		echo "<a href ='Index.php'>Click to go to home page.</a>";
		
	} else {
	
		echo "Incorrect username or password";
		
		echo "<a href ='Login.php'>Go Back.</a>";
	}
	
	$conn->close();

	?>
</body>

</html>