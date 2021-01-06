<?php 
include "config/config.php";
include "config/db.php";

// Create Query
$query = 'SELECT * FROM posts ORDER BY created_at DESC';

// Get Result
$result= mysqli_query($conn,$query);

// Fetch Data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
//var_dump($posts);

// Free Result

mysqli_free_result($result);

// Close Connection
mysqli_close($conn);
?>

<?php include "inc/header.php"; ?>

<div class= "container">
	<h1 style = "color:grey">Posts</h1>
</div>

<?php foreach($posts as $post): ?>
	<div class= "container">
		<ul class="list-group">
			<li class="list-group-item" style = "color:red">
				<h3><?php echo $post['Title']; ?></h3>
			</li>

			<li class="list-group-item">
				<small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?>
			</small>
		</li>
		<li class="list-group-item">
			<p>
				<?php echo $post['body'];?>
			</p>
		</li>
		<li class ="list-group-item">
			<a class ="btn btn-default"href = "<?php echo ROOT_URL; ?>/post.php?ID= <?php echo $post['ID']; ?> ">Read More</a>
		</li>

	</ul>
</div>
<br>
<?php endforeach; ?>
<hr>
<?php var_dump($post); ?>
<?php include "inc/footer.php"; ?>