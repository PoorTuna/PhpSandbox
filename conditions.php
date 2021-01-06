<?php
# === is for same datatype and same value
# !== not identical (oposite to the one above)
# ==,<,>,<=,>=,==,!=

$num = 4;
# '5' will work with == but not with === !
if($num === '5'){
	echo "1";
}

elseif($num == '5') {
	echo "2";
}

#NESTING IF:
	$num =  5;
	if($num >= 5 && $num != 7 and $num != 8){
		if($num < 10){
			echo "$num passed<br>";
		}
	}

#Switch case:
	$favColor = 'yellow';
	switch ($favColor) {
		case 'yellow': # IF 
			echo "nice!";
			break;
		
		default: # Else
			echo 'weird...';
			break;
	}
?>