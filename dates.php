<?php
	// echo date('d'); // Day - > j without the 0
	// echo date("m"); // Month -> "F" for textual representation
	// echo date('Y'); // Year => eg. 2020
	// echo date('y'); // without the millennium => eg. 20
	// echo date('l'); // Day of the week
	// echo date('S'); // Suffix of a day in a month [english way].
	function show_date_time(){
		echo "Today is : ", date('l')," ",date('jS')," of ", date('F'),", ", date('Y'),". <br>";

		//Set TimeZone : 
		date_default_timezone_set('Asia/Jerusalem');
		echo "The time is : ",date("h:i:s , A."); // starts with a wrong timezone!
	}

	//show_date_time();


	$timestamp = mktime(10,14,54,9,10,1981);
	// Hour : Minutes : Seconds : Month : Day : Year
	// This basically shows the time in seconds since computers started counting -> January 1st 1970 00:00:00 GMT.
	
	//echo $timestamp

	//echo date('m/d/Y h:i:sa',$timestamp)

	$timestamp2 = strtotime('7:00pm March 22 2016'); // can be without time.
	//echo $timestamp2

	$timestamp3 = strtotime("today"); // +2 days , tomorrow , today , next year, next month
	echo date('l/F/Y => d/m/y',$timestamp3);

?>