<?php

	//setcookie('username','Frank',time() + (86400 * 30) );
	
	//To unset a cookie :
	setcookie('username','Frank',time() - 3600 ); // basically just make it so the time has passed.
	var_dump($_COOKIE);
	if(count($_COOKIE) > 0)
		echo "There are".count($_COOKIE). "cookies saved <br>";
	else
		echo "There are no cookies saved <br>";

	if(isset($_COOKIE['username'])){
		echo "User: $_COOKIE[username] is set.";
	}else{
		echo "No user set.";
	}



?>


<!DOCTYPE html>
<html>
<head>
	<title>page2</title>
	<link rel ="stylesheet" href = "https://bootswatch.com/4/darkly/bootstrap.min.css">
</head>
<body>

</body>
</html>