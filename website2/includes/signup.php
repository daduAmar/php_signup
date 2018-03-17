<?php  
	include_once 'dbh.php';

	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	

	$query="INSERT INTO people   (first_name,last_name,email) values ('$first','$last','$email')";

	mysqli_query($conn,$query);

	header("Location: ../index.php?signup=success");

?>