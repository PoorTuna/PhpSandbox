<?php
	// Check for submit

	if(filter_has_var(INPUT_POST, 'submit')){
		// GET form datga
		if (isset($_POST['name']))
			$name = $_POST['name'];
		else
			$name = "default";
		if (isset($_POST['email']))
			$email = $_POST['email'];
		else
			$email = "example@gmail.com";
		if (isset($_POST['password']))
			$password = $_POST['password']; 
		else
			$password = "pass";
		$data = ["name" => $name, "email" => $email, "password" =>$password];
		var_dump($data);
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel ="stylesheet" href = "https://bootswatch.com/4/darkly/bootstrap.min.css">
</head>
<body>
<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><b>Sollaris</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class ="nav-item active">
      	<a class ="nav-link" href ="www.google.com">Hi</a>
      </li>
    </ul>
  </div>
</nav>
<!-- Form -->
<form method = "POST" action = "<?php echo $_SERVER['PHP_SELF']?>">
    <div class="form-group">
      <label for="name">Full Name</label>
      <input type="text" class="form-control" id="name" name = "name" placeholder="Enter your full name" value = "
      <?php echo isset($_POST['name']) ? $name : ''; ?>">
    </div>
    <div class="form-group">
      <label for="email">Email address</label>

      <input type="email" class="form-control" id="email" name= "email" placeholder="Enter email" value = "
      <?php echo isset($_POST['email']) ? $email : ''; ?>">

      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="password1">Password</label>
      <input type="text" class="form-control" id="password1" placeholder="Password" name ="password" value = "
      <?php echo isset($_POST['password']) ? $password : ''; ?>" >
    
    </div>
    <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
</form>

</body>
</html>