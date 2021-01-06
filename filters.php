<!DOCTYPE html>
<html>
<head>
	<title>Filters</title>
</head>
<body>

	<?php
		#filter_var -> filters a variable
		#filter_input -> filters an input from form html
		#filter_has_var -> checks if theres a set value in an input tag in a form
	
		if(filter_has_var(INPUT_POST, "data") and $_POST['data'] != ""){
			echo "data found, <br>";
			$_POST['data'] = filter_var($_POST['data'],FILTER_SANITIZE_URL);
			
			

			if( substr($_POST['data'],0,4) == "www."){ 
				$_POST["data"] = "http://".$_POST['data'];
			}
			elseif(substr($_POST['data'],0,4) != "http"){
				$_POST["data"] = "http://www.".$_POST['data'];
			}

			$url = $_POST['data'];
			echo $url."<br>";
			if(filter_var($url,FILTER_VALIDATE_URL)){ # Better than filter_input because here you can process the info from the form and then check it and with the filter_input you cant do that because it takes the data straight from the form!
				echo "URL is valid";
			}
			else{
				echo "URL is invalid";
			}
		}
		else{
			echo "no data";
		}
	?>

	<form method= "POST" action = "<?php echo $_SERVER['PHP_SELF'];?>">
		<input type = "text" name = "data"></input>
		<button type = "submit">Submit</button>
	</form>

	<?php 
		var_dump($_POST);










	?>
</body>
</html>