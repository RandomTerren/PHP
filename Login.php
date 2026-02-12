<!DOCTYPYE html>

<html lang="en">

<head>

	<title>Login</title>

	<script>
		
		function qs(search_for) {

			var query = window.location.search.substring(1);
			var parms = query.split('&');

			for (var i=0; i<parms.lengh; i++) {
				var pos = parms[i].indexof('=');
				if (pos > 0 && search_for == parms[i].substring(0,pos)) {
					return parms[i].substring(pos+1);;
				}
			}

			return "";
		}
	</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>

$(document).ready(function(){

	$("button").click(function(){

		$("#p1").hide();
	});
});

</script>

</head>

<body>

<?php

$FirstnameErr = $LastnameErr = "";

$Firstname = $Lastname = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Firstname"])) {
    $nameErr = "First Name is required";
  } else {
    $Firstname = test_input($_POST["Firstname"]);
  }
  
   if (empty($_POST["Lastname"])) {
    $LastnameErr = "Lastname is required";
  } else {
    $Lastname = test_input($_POST["Lastname"]);
  }
   


<p id="p1">This is not a real shopping website, do NOT put real info in.</p>

<button onclick="this.remove()">I understand</button>

<form action="Index.php" method="get">
  
First Name: <input type="text" name="Firstname">

Last Name: <input type="text" name="Lastname">

<input type="submit" name="submit" value="Submit">

</form>

<script type="text/javascript">

	document.write(qs("Firstname") + " " + qs("Lastname"));

</script>

</body>

</html>