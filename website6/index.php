<?php

?>


<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link rel ="stylesheet" href = "https://bootswatch.com/4/darkly/bootstrap.min.css">
	<script>
		function showSuggestion(str){
			if(str.length == 0)
				document.getElementById('searchbar').innerHTML = '';
			else{
				// AJAX REQ
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function(){
					if(this.readyState == 4 && this.status == 200)
						document.getElementById('output').innerHTML = this.responseText;
				}
				xmlhttp.open("GET", "suggest.php?q="+str,true);
				xmlhttp.send();
			}
		}


	</script>
</head>
<body>
	<div class= "container">
		<h1>Search Users</h1>
		<form>
			<label for = "searchbar">Search User:</label>
			<div class= "form-group">
				<input type= "text" name="search" id ="searchbar" class="form-control" onkeyup="showSuggestion(this.value)">
			</div>
			<label for = "output">Suggestions:</label>
			<span id= "output" style = "font-weight: :bold"></span>

		</form>
</body>
</html>