<?php
	$path = "dir0/dir1/myfile.php";
	$file1_path = "file1.txt";

	# BASIC FILE HANDLING COMMANDS : 

	//Return File name
	#echo basename($path);

	//Return File name without extention (eg: .php)
	#echo basename($path,".php");


	//Return Directory name from the path
	#echo dirname($path);

	//Check if a file / folder exists :

		//Check if file exists : 
		#echo file_exists($file1_path); can be used also on folders

		// Checks to see if file 
		#echo is_file($file1_path); # Cannot be used on folders

	//Get absolute path : -> V:/Xammp-php/htdocs/phpsandbox/website7/file1.txt (including everything!) 
	#echo realpath($file1_path);

	//Check if a file is writable : 
	#echo is_writable($file1_path);


	//Check if a file is readable :
	#echo is_readable($file1_path);

	//Get file size : 
	#echo filesize($file1_path);


	# FILE MANIPULATING COMMANDS :
	
	//Create a directory :
	#mkdir('testing');

	//Remove a directory : !AS LONG AS ITS EMPTY!
	#rmdir('testing');


	//Copy a file :
	#copy($file1_path, 'file2.txt');

	//Rename a file : 
	#rename('file2.txt', 'newname.txt');


	//Delete a file : 
	#unlink('newname.txt');

	//Write from file to string :  ( READ FILE CONTENTS )
	#echo file_get_contents('file1.txt');

	//Write from string to file : ( WRITE TO FILE ) NOT APPEND
	#file_put_contents('file1.txt', "HELLO \r\n")

	//Appending from string to file : ( APPEND TO FILE ) -> Instead of overwriting the current contents.
		/*
	$data = "hello";
	$file_data = file_get_contents($file1_path);
	file_put_contents($file1_path, $file_data. "\r\n" . $data);
		*/

	//PYTHON WAY OF FILE HANDLING :

	$handle = fopen($file1_path, 'r');
	$data = fread($handle, filesize($file1_path));
	echo $data;

	//OPEN A FILE FOR HANDLING :
	$filehandle = fopen($file1_path, "w");
	$text = 'John Cena';
	fwrite($filehandle, $text);

	fclose($filehandle); // NEVER FORGET TO CLOSE FILES!


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel ="stylesheet" href = "https://bootswatch.com/4/darkly/bootstrap.min.css">
</head>
<body>

</body>
</html>