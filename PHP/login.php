<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
		$LastName = $_POST['username'];
		$FirstName = $_POST['password'];

		echo 'Username: ',$LastName,'<br>Password: ',$FirstName,'<br>';
		if($LastName == '' || $FirstName == ''){
			echo 'something is wrong';
		}else{
			require_once('dbConnect.php');
			$sql = "SELECT * FROM Login WHERE username='$FirstName' and password='$LastName'";

			$check = mysqli_fetch_array(mysqli_query($con,$sql));
			echo 'sql: ',$check;

			if(isset($check)){
				//$url = 'http://athena.ecs.csus.edu/~scubed/lower_division.html';
				//	header( "Location: $url" );
				echo 'it worked'
			}else{
				echo 'Oops! Please try again!';
			}
			
			mysqli_close($con);
		}
}else{
	echo 'Error';
}
?>