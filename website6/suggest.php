<?php
// Names for the search bar:
$people[] = "Soxomon";
$people[] = "Saxophone";
$people[] = "adolady";
$people[] = "Help";
$people[] = "limidelphia";
$people[] = "Xd";
$people[] = "Rambo";
$people[] = "ez";
$people[] = "oren";
$people[] = "genius";
$people[] = "fook";

//Get Query String:

$q = $_REQUEST['q']; // MIGHT BE A POST REQUEST AND NOT GET LIKE WE THINK (NO REASON RIGHT NOW FOR IT NOT BEING GET THOUGH!)
$suggestion = "";

//Get Suggestions
if($q != ""){
	$q = strtolower($q);
	$len = strlen($q);
	foreach( $people as $person){
		if(stristr($q, substr($person, 0,$len))){
			if($suggestion === "")
				$suggestion = $person;
			else
				$suggestion .= ", $person";
		}
	}
}
echo $suggestion === "" ? "no suggestion" : $suggestion ;

?>


<!DOCTYPE html>
<html>
<head>
	<title>Suggestions</title>
	<link rel ="stylesheet" href = "https://bootswatch.com/4/darkly/bootstrap.min.css">
</head>
<body>
	
</body>
</html>