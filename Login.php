<!DOCTYPYE html>

<html lang="en">

<head>

	<title>Login</title>

<script>

$(document).ready(function(){

	$("button").click(function(){

		$("#p1").hide();
	});
});

</script>

</head>

<body>

<p id="p1">This is not a real shopping website, do NOT put real info in.</p>

<button onclick="this.remove()">I understand</button>

<form action="Index.php" method="POST">

  <label for="uname">Username:</label><br>

  <input type="text" id="username" name="username"><br>

  <label for="pass">Password:</label><br>

  <input type="text" id="password" name="password"><br><br>

  <input type="submit" value="Submit">

<script type="text/javascript">

	document.write(qs("Firstname") + " " + qs("Lastname"));

</script>

</body>

</html>