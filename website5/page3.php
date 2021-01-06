<?php
	$user = ['name' => "brad", 'email' => "test@gmail.com", 'age' => 35];

	$user = serialize($user); // a way to turn an array to string because you cannot use arrays in cookies! unserialize($_COOKIE['user']);
	setcookie('user',$user,time() + (86400 * 30));

?>


<!DOCTYPE html>
<html>
<head>
	<title>PAGE 3</title>
	<link rel ="stylesheet" href = "https://bootswatch.com/4/darkly/bootstrap.min.css">
</head>
<body>

</body>
</html>