<?php
	include "config/config.php";
	include "config/db.php";

	//Get ID

	$id = mysqli_real_escape_string($conn,$_GET['ID']);

	// Create Query
	$query = 'SELECT * FROM posts WHERE id ='."$id";

	// Get Result
	$result= mysqli_query($conn,$query);

	// Fetch Data
	$post = mysqli_fetch_assoc($result);
	//var_dump($posts);

	// Free Result

	mysqli_free_result($result);

	// Close Connection
	mysqli_close($conn);
?>


<?php 
	include "inc/header.php"; ?>
	<div class= "container">
		<h1 style = "color:grey"><?php echo $post['Title']; ?></h1>
	</div>
		<div class= "container">
			<ul class="list-group">
				<li class="list-group-item">
					<small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?>
					</small>
				</li>
				<li class="list-group-item">
					<p>
						<?php echo $post['body'];?>
					</p>
				</li>
				<li class = "list-group-item">
					<!-- "/" and index.php act the same-->
					<button class="btn btn-primary" name ="goback">
						<a href = "<?php echo ROOT_URL; ?>">GoBack</a> 
					</button>
				</li>
			</ul>
		</div>
		<br>

	<?php include "inc/footer.php"; ?>