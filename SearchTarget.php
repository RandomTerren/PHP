
<!DOCTYPE html>
<html  lang="en">
	
<head>

<?php include 'dbconnect.php'; ?>

</head>

<body>

<?php
  $sql = "SELECT * FROM Products" ;
  $where = " WHERE";
  
  echo("<h1>Search Results</h1>");
  
  if(empty($_POST['searchbox'])) 
  {
    echo("You didn't enter any search terms.");
  } 
  else 
  {	
	$searchTxt = $_POST['searchbox'];

	$where = $where . " Products LIKE %" . $searchTxt . "%";
    
    echo("<br> " . $searchTxt . "<br>"); 
	
	echo("<br> This is the SQL statement: <br>");
	
	$sql = $sql . $where . ";";
	echo("<br>");
	echo $sql;  
  }
?>

</body>

</html>