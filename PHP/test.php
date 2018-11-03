<?php
require_once('dbConnect.php');
$sql = "SELECT  admin_flag 
		FROM Login2 
		WHERE username='advisor' and password='password'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		//global $course, $units, $semester, $grade, $notes;
		$admin_flag = $row["admin_flag"];
	}
}
echo "admin_flag: ".$admin_flag;
mysqli_close($con);