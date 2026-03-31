
<!DOCTYPE html>
<html  lang="en">
	
<head>

<?php include 'dbconnect.php'; ?>

</head>

<body>
	<?php
	
		$custusername = trim($_POST["username"]);
		$custpassword = trim($_POST["password"]);
		$custname = trim($_POST["custname"]);
		$custphone = trim($_POST["custphone"]);
		$custemail = trim($_POST["custemail"]);
		
	echo "<h2>Registration Target Page</h2>"; 
	
	$sqlauth = "INSERT INTO userandpass (Username, Password) 
	VALUES ('" . $custusername . "', '" . $custpassword . "')";
	
	$conn->query($sqlauth);
	$maxq = "SELECT MAX(CustID) FROM customers";
	$maxresult = mysqli_query($conn, $maxq);
	
	if (mysqli_num_rows($maxresult) > 0) {
    $row = mysqli_fetch_assoc($maxresult);
    $newcustID = $row["MAX(CustID)"] + 1;
	} 
	else {
    $newcustID = 1;
	}

	$sqlcust = "INSERT INTO customers (CustID, CustName, email, phone, username) VALUES(" 
	. $newcustID . ",'"
	. $custname . "','"
	. $custemail . "','"
	. $custphone . "','"
	. $custusername
	. "')";
	
	echo "Welcome " . $custname . "<br>";
	
	echo "<a href ='Index.php'>Click to go to home page.</a>";

	$conn->query($sqlcust);
	$conn->close();
	?>
</body>

</html>
