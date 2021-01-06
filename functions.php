<?php
#Functions:
/*
	Ways of writing functions : pep8?
	Note: these are only ways of writing a function and they dont make any difference.

	- Camel Case -> myFunction()  // the most common way of writing a function 
	- Lower Case ->	my_function() // common use of functions -> code igniter
	- Pascal Case -> MyFunction() // Mostly used for classes when working with objects
*/

	function my_function($x = 1){
		for($i = $x*10 - 10 ; $i <= $x*10 ; $i++){
			echo $i;
		}
		return $x + 1;

	}

	$int = 1;
	$stop = 0;
	while($stop <= 10){
		$stop = my_function($int);
		$int = $stop;
		//echo $stop;
	}

?>