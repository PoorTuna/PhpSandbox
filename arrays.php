<?php
# Arrays

#Types of arrays:
/*
	-Indexed
	-Associative
	-Multi-dimensional
*/
	#Newline that works in every OS -> nl2br because html wont understand it otherwise.
		# Server is based on html.
	echo nl2br("\r\n");

	//Indexed php way:
	$people = array('ay','lmao','retard');
	echo $people[0];

	//Indexed ALT python
		$numbers = [1,2,3,4,5,6];
		echo $numbers[0];


		# To add a new element to the list you can either index the number that comes after the last element in the list or if you dont know what number that is simply leave the brackets empty.

		$numbers[6] = 7;
		$numbers[] = 9;
		echo $numbers[6];
		echo nl2br("\r\n");
		echo $numbers[7];
		echo nl2br("\r\n");

		#Amount of items in a list:
			echo count($numbers);
			echo nl2br("\r\n");

		#Print each item in an array:
			print_r($numbers);
			echo nl2br("\r\n");
			echo nl2br("\r\n");
		#Show var type and info:
			var_dump($numbers);	
			echo nl2br("\r\n");
	#Associative Array:
			$people = array('Brad' => 35,'Jose' => 32,'William' => 37);
			echo $people['Brad'];
			$ids = array(22 => "Oren", 23 => "fuckboy");
			echo $ids[23];

	#Multi-Dimensional Array:
			$ages = [[12,1],[2,3],[3,4]];
			echo $ages[0][0];
?>