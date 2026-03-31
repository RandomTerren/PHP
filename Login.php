<!DOCTYPYE html>

<html lang="en">

<head>

<?php include 'dbconnect.php'; ?>

	<script>
			
		   function qs(search_for) {
			   
				var query = window.location.search.substring(1);
				
				var parms = query.split('&');
		
				for (var i=0; i<parms.length; i++) {
					
					var pos = parms[i].indexOf('=');
					
					if (pos > 0  && search_for == parms[i].substring(0,pos)) {
						
						return parms[i].substring(pos+1);;
					}
				}
				return "";
			}
	
		</script>
	

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

<form action="Target.php" method="POST">

  <label for="uname">Username:</label><br>

  <input type="text" id="username" name="username"><br>

  <label for="pass">Password:</label><br>

  <input type="text" id="password" name="password"><br><br>

  <input type="submit" value="Submit">

<script type="text/javascript">

	document.write(qs("username") + " " + qs("password"));
</script>

<br>

<a href="Register.php">Register</a>

</body>

</html>