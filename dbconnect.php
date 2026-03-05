<?php

$servername = "localhost";

$Username = "root";

$Password = "mysql";

$dbname = "foster1010";

$conn = new mysqli($servername, $Username, $Password, $dbname);

if ($conn->connect_error) {
	
  die("Connection failed: " . $conn->connect_error);
}
?>