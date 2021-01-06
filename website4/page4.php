<?php
	session_start();
	//unset($_SESSION['name']);
	//unset($_SESSION['email']);
	session_destroy(); // completely delete the session

?>


<!DOCTYPE html>
<html>
<head>
	<title>Page4 unsetter</title>
	<link rel ="stylesheet" href = "https://bootswatch.com/4/darkly/bootstrap.min.css">
</head>
<body>
	<h1>Data Removed.</h1>
	<a href = "page3.php"> Go back to page 3 </a>
</body>
</html>