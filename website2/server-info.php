<?php
	// $_SERVER SUPERGLOBAL
	
	//Create Server Array
	$server = [
		'Host Server Name' => $_SERVER['SERVER_NAME'],
		'Filename' => $_SERVER['PHP_SELF'],
		'Host Header' => $_SERVER['HTTP_HOST'],
		
		'Server Software' => $_SERVER['SERVER_SOFTWARE'],
		'Document Root' => $_SERVER['DOCUMENT_ROOT'],
		'Absolute Path' => $_SERVER['SCRIPT_FILENAME']

	];

		//echo $Server['Host Server Name'],"<br>";
		//echo $Server['Filename'], "<br>";
		//echo $Server['Host Header'], "<br>";
		//echo $Server['User Browser'], "<br>";
		//echo $Server['Server Software'], "<br>";
		//print_r($Server);

	//Create Client Array
	$Client = [
		'User Browser' => $_SERVER['HTTP_USER_AGENT'],
		'Client IP' => $_SERVER['REMOTE_ADDR'],
		'Remote Port' => $_SERVER['REMOTE_PORT'],


	];

	//var_dump($Client);
?>