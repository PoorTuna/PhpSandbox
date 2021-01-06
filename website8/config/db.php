<?php
	//Create Connection :
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
//SERVERIP,USERACCOUNT,PASSWORD,DATABASENAME

//Check connection:

if(mysqli_connect_errno()){
	//Connection failed
	echo "Failed to connect to MYSQLi!".mysqli_connect_errno();
}


?>