<?php
	if (isset($_POST["name"])){ # -> checks if the value is set in the array
		echo htmlentities($_POST["name"]);} # -> makes it so attackers wont be able to execute scripts within your input box (turns everything to string so <script> will be a string and not a working tag)

		# GET method -> send data through url ( like youtube with videos )
		# POST method -> send data without using the url ( much more secure because can be used with encryption such as https)
		# Request superglobal works with both POST and GET meaning that in the php script above if we change the array from post to request it will still work (if you are lazy or cant keep track) // not used very much
?>
<!DOCTYPE html>
<html>
<head>
	<title>Title</title>
</head>
<body>

	<form method="POST" action="get_POST2.php">
		<div class ="">
			<label>
				<input type="text" name="name">
			</label>
			<label>
				<input type="text" name="email">
			</label>

		</div>
		<input type="submit" name="submit">
	</form>


</body>
</html>


