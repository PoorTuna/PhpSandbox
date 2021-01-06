<!DOCTYPE html>
<html>
<head>
	<title>SHORTHAND</title>
</head>
<body style = "background-color: gray">

<?php
	$loggedIn = true;
	/*
	if ($loggedIn){
		echo "You are logged in";
	}
	else{
		echo "You are not logged in";
	}

	*/
	#echo ($loggedIn) ? ucwords("You are logged in <br>") : ucwords("You are not logged in <br>"); // does the same as the above


	$isRegistered = ($loggedIn == true ? 10 : 20);
	#echo $isRegistered."<br>";


	$score = 10;
	$age = 20;

	#NESTING :
		#echo "Your score is: ".($score > 10 ? "above average" : "bellow avergae"." | " . " The time you lasted: ".($age > 15 ? "above average" : "bellow average"));

		#echo "Your score is : " . ($score > 20 ? ($age > 15 ? "average" : "exceptional") : ($age > 15 ? "horrible" : "average"))
?>

<!--Normal way of combining PHP and html:-->
<div>
	<?php if($loggedIn) { ?>
		<h1>Welcome User</h1>

	<?php } else { ?>
		<h1>Welcome Guest</h1>
	<?php } ?>
</div>

<!--SHORTHAND IF:-->

<div>
	<?php if($loggedIn): ?>
		<h1>Thanks for purchasing SHORTHAND!</h1><br>
	<?php else: ?>
		<h1>Buy SHORTHAND Now!</h1>
	<?php endif; ?>
		

</div>


<!-- Shorthand Loops-->
<?php $arr = [1,2,3,4,5,6]; ?>

<?php foreach($arr as $value): ?>
	<?php if ($value % 3 == 0): ?>
		<h1 style="color:lime">The number can be divided with 3</h1><br>
	<?php else: ?>
		<h1 style= "color:green">The number cannot be divided with 3</h1><br>
	<?php endif ?>
<?php endforeach; ?>
	


<?php for($i = 0 ; $i < 10 ; $i++): ?>
	<i><b style = "color:white;background-color:black"> Cool Text</b></i>


<?php endfor; ?>

</body>
</html>