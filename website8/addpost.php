<?php 
include "config/config.php";
include "config/db.php";

	// Check for submit
if (isset($_POST['submit'])){
		// Get form data :
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$author = mysqli_real_escape_string($conn, $_POST['author']);
	$body = mysqli_real_escape_string($conn, $_POST['body']);

	$query = "INSERT INTO posts(title,author,body) VALUES('$title','$author','$body')";

	if(mysqli_query($conn, $query)){
		header('Location:'.ROOT_URL . '');
	}
	else{
		echo "Error: ".mysqli_error($conn);
	}
}



?>

<?php include "inc/header.php"; ?>

<div class= "container">
	<h1 style = "color:grey">Add Post</h1>
</div>

<form method = "POST" action = "<?php echo $_SERVER['PHP_SELF']?>">
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" class="form-control" id="title" name = "title" placeholder="Enter your posts name">
	</div>

	<div class="form-group">
		<label for="author">Author</label>
		<input type="text" class="form-control" id="author" name= "author" placeholder="Enter your name">
	</div>
	<div class="form-group">
		<label for="body">Body</label>
		<textarea type="text" class="form-control" id="body" placeholder="Enter text" name ="body"></textarea>
	</div>

	<button type="submit" class="btn btn-primary" name ="submit">Submit</button>
</form>


<?php include "inc/footer.php"; ?>