<?php
	if(isset($_POST['submit'])){
			session_start(); // Starts the session
			$_SESSION['name'] = htmlentities($_POST['name']);
			$_SESSION['email'] = htmlentities($_POST['email']);
			header('Location:page2.php'); // redirect to another page
	}



?>

<!DOCTYPE html>
<html>
<head>
	<title>page1</title>
	<link rel ="stylesheet" href = "https://bootswatch.com/4/darkly/bootstrap.min.css">
</head>
<body>


<form method = "POST" action = "<?php echo $_SERVER['PHP_SELF']?>">
    
    <div class="form-group">
      <label for="name1">Full Name</label>
      <input type="text" class="form-control" id="name1" placeholder="Enter your full name" name = "name" value = "
      <?php echo isset($_POST['name']) ? $name : NULL; ?>">
    </div>
    <div class="form-group">
      <label for="email">Email address</label>

      <input type="email" class="form-control" id="email" name = "email" placeholder="Enter email" value = "
      <?php echo isset($_POST['email']) ? $email : NULL; ?>">

      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
</form>





</body>
</html>