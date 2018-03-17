<?php  
    //create connection

 	$conn=mysqli_connect('localhost','root','amar','phpdetails');

 	//check connection 
 	if (mysqli_connect_errno()) {
 		//connection failed

 	echo 'Failed to connect to MYSQL'.mysqli_connect_errno();
 	}

?>