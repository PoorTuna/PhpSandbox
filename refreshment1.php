<?php

	$sex = 12;

	echo $sex;

	echo "<br>";

	$sex2 = [10 => "xd", 20 => "sex", 30 => 12];
	var_dump($sex2);
	echo "<br>";
	#echo $sex2[10];
	foreach($sex2 as $id => $name){
		echo $id.":".$name."<br>";

	}
?>