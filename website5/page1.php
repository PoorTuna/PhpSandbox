<?php
	if(isset($_POST['submit'])){
		$username = htmlentities($_POST['username']);
		setcookie('username',$username, time() + 3600); // 1 hour cookie
		header("Location: page2.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>page1</title>
	<link rel ="stylesheet" href = "https://bootswatch.com/4/darkly/bootstrap.min.css">
</head>
<body>
	<form method ="POST" action = "<?php echo $_SERVER['PHP_SELF'];?>">
		<div class = "form-group">
			<label for="ur">Enter Username</label>
			<input class="form-control" id = "ur" type = "text" name = "username" placeholder="Enter your username">
		</div>
		
		<button type="submit" class="btn btn-primary" name ="submit">Submit</button>
	</form>
</body>
</html>