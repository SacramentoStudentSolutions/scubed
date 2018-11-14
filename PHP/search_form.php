<?php
	// Get search term
	$key=$_GET['key'];
	$array = array();
	$con=mysqli_connect("athena","cscadvisingform","egbagitj","cscadvisingform");
			
		$query=mysqli_query($con, "select * from Student where LastName LIKE '%{$key}%'");



		while($row=mysqli_fetch_assoc($query))
			{
				$array[] = $row['LastName'];
				$array[] = $row['FirstName'];
	
			}
			echo json_encode($array);
			mysqli_close($con);
	
	
?>