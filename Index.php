<!DOCTYPYE html>

<html>

<head>

<?php include 'dbconnect.php'; ?>

<title>Terren Tech Home</title>

<link rel="stylesheet" href="Style.css">

</head>

<body>

<h1>Terren Tech</h1>

	<br><br>

	<div class="headerWrapper">
	
		<div class="navbar">

			<ul>

			 	<li><a class="active" href="Search.php">Search</a></li>

			 	<li><a href="Profile.php">Profile</a></li>

			 	<li><a href="Wallet.php">Wallet</a></li>

			 	<li><a href="Cart.php">Cart</a></li>

				<li><a href="Settings.php">Settings</a></li>

			</ul>
		
		</div>
		
		
		<div style="float:right;">

			<img src="Logo.png" style="width:50px; height:50px;">
		</div>
		
	</div>
	
	<br><br>

	<?php
		$username = $_POST["username"];

		$password = $_POST["password"];
	?>

	<p>Welcome <?php echo $username; ?></p>
	
	<?php 
	
	echo $username . "<br>";
	
	echo $password . "<br><br>"; 

	$sql = "SELECT * FROM customers WHERE CustID = '" . $username . "';";
	
	echo $sql . "<br>";
	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		echo "You are logged in!<br>";

		$row = $result->fetch_assoc();
		
		echo "Welcome " . $_SESSION["CustName"] . "!<br>";
	} 
	else {
		
		echo "Incorrect username or password";
		
	}
	$conn->close();

	?>
	<a href = nextpage.php>Click here to see session variables</a>

</body>

</html>