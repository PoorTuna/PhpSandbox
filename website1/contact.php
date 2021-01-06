<!DOCTYPE html>
<html>
<head><title>Contact Page</title></head>
<body>
<?php include 'inc/header.php'; ?> <!-- > This is how you import code from other files (note : imports everything that is written there! -> copy paste</!-->

	<h1>Contact</h1>

<?php require 'inc/footer.php'; 

//Difference between include and require is that if lets say the file is missing when you use include then the script will skip it and continue working but if you use require the script will stop working! require = include + protection

#Require_once means that you wont be able to import the same file twice in a doc.
?>



</body>
</html>