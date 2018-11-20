<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
		$SacStateID = $_POST['SacStateID'];
		$LastName = $_POST['LastName'];
		$MiddleInitial = $_POST['MiddleInitial'];
		$FirstName = $_POST['FirstName'];
		$EmailAddress = $_POST['EmailAddress'];
		$CellPhoneNumber = $_POST['CellPhoneNumber'];
		$CatalogYear = $_POST['CatalogYear'];
		$PlannedGraduationDate = $_POST['PlannedGraduationDate'];

		if($SacStateID == '' || $LastName == '' || $FirstName == '' || 
			$EmailAddress == '' || $CellPhoneNumber == '' || $CatalogYear == '' || $PlannedGraduationDate == ''){
			echo 'Please fill all values.';
		}else{
			require_once('dbConnect.php');
			$sql = "SELECT * FROM Student WHERE SacStateID='$SacStateID'";

			$check = mysqli_fetch_array(mysqli_query($con,$sql));

			if(isset($check)){
				echo 'Student information already exist.';
			}else{
				$sql = "INSERT INTO Student 
						VALUES('$SacStateID', '$LastName', '$MiddleInitial', '$FirstName', '$EmailAddress', '$CellPhoneNumber', '$CatalogYear', '$PlannedGraduationDate')";
				if(mysqli_query($con,$sql)){
					$url = 'http://athena.ecs.csus.edu/~scubed/lower_division.html';
					header( "Location: $url" );
				}else{
					echo 'Oops! Please try again!';
		
				}
			}
			mysqli_close($con);
		}
}else{
	echo 'Error';
}
?>