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