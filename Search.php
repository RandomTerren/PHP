<!DOCTYPYE html>

<html>

<head>

<?php include 'dbconnect.php'; ?>

<link rel="stylesheet" href="Style.css">

</head>

<body>

	<h1>Search</h1>

	<br><br>

	<div class="headerWrapper">
	
		<div class="navbar">

			<ul>

			 	<li><a class="active" href="Index.php">Home</a></li>

			</ul>
		
		</div>
		
		
		<div style="float:right;">

			<img src="Logo.png" style="width:50px; height:50px;">
		</div>
		
	</div>
	
	<br><br>
	
	<form action="SearchTarget.php" method="post">
    
	<div>
			<input type="text" name="searchbox" />
	</div>
	
    <button type="submit">Search</button>
	
</form>

</body>

</html>