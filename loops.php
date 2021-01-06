<?php
	#LOOPS

	/*
	For
	While
	Do..While
	Foreach
	*/

	#For Loop
	# @params - init,condition,inc

		for($i = 0; $i < 12;$i+= 1){
			echo $i;
			echo nl2br("\r\n");
		}
	#While Loop
		$i = 0;
		while ($i != 10){
			echo $i.' [2]';
			echo nl2br("\r\n");
			$i++;
		}
	#Dowhile Loop
	#@params - condition
		$i = 0;
		do{
			echo $i;
			echo nl2br("\r\n");
			$i++;
		}
			while ( $i <= 10) ;
				
	#ForEach Loop
		$people = ["brad","jose","william"];
		foreach($people as $person){
			echo $person;
			echo nl2br("\r\n");
		}
	#ForEach Associative Loop:
		$people = [22 => "person" , 23 => "persona"];
		foreach($people as $number => $name){
			echo $number." ".$name;
			echo nl2br("\r\n");
		}
?>