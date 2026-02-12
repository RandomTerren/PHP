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

<p id="p1">This is not a real shopping website, do NOT put real info in.</p>

<button onclick="this.remove()">I understand</button>

<form action="Index.php" method="GET">

  <label for="firstname">Firstname:</label><br>

  <input type="text" id="firstname" name="firstname"><br>

  <label for="lastname">Lastname:</label><br>

  <input type="text" id="lastname" name="lastname"><br><br>

  <input type="submit" value="Submit">
  
</form> 

<script type="text/javascript">

	document.write(qs("Firstname") + " " + qs("Lastname"));

</script>

</body>

</html>