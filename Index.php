<!DOCTYPYE html>

<html>

<head>

<?php

$servername = "localhost";

$username = "root";

$password = "mysql";

$dbname = "foster1010";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	
  die("Connection failed: " . $conn->connect_error);
}
?>

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

</body>

</html>