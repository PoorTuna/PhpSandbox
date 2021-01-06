<?php
	session_start(); //start session
	$name = isset($_SESSION['name']) ? $_SESSION['name'] : "Guest";
	$email =  isset($_SESSION['email']) ? $_SESSION['email'] : "guest@gmail.com";
?>


<!DOCTYPE html>
<html>
<head>
	<title>PAGE 3</title>
	<link rel ="stylesheet" href = "https://bootswatch.com/4/darkly/bootstrap.min.css">
</head>
<body>
	<h1><?php echo "see it still works, $name!"?></h1><br>
	<a href = "page4.php">Go to page4 [unset session values!] </a>
</body>
</html>