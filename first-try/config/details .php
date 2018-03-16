<?php  
	require('config/connection.php');

	$query='SELECT * FROM students';	
	$result=mysqli_query($conn,$query);
	$resultCheck= mysqli_num_rows($result);

	if ($resultCheck > 0) {
	
		while($row = mysqli_fetch_assoc($result)){
		
		    echo "<tr>";
	                echo "<td>" . $row['Id'] . "</td>";
	                echo "<td>" . $row['Student_name'] . "</td>";
	                echo "<td>" . $row['Email'] . "</td>";
	                echo "<td>" . $row['Address'] . "</td>";
	        echo "</tr>";
	    }
	
	}	

?>
