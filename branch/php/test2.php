<?php
$course = "1";
$units  = "2";
$semester  = "3";
$grade  = "4";
$notes  = "5";
function fillCell($inCourse) {
	require_once('dbConnect.php');
	$sql = "SELECT * FROM class Where Course='$inCourse'";
	$result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			//global $course, $units, $semester, $grade, $notes;
			$GLOBALS['course'] = $row["Course"];
			$GLOBALS['units']  = $row["Units"];
			$GLOBALS['semester']  = $row["Semester"];
			$GLOBALS['grade']  = $row["Grade"];
			$GLOBALS['notes']  = $row["Notes"];
		}
	} else {
		$GLOBALS['course'] = "";
		$GLOBALS['units']  = "";
		$GLOBALS['semester']  = "";
		$GLOBALS['grade']  = "";
		$GLOBALS['notes']  = "";
	}
mysqli_close($con);
}
fillCell('CSc 15');
echo "course: ".$GLOBALS['course']."<br>";
echo "units: ".$units."<br>";
echo "semester: ".$semester."<br>";
echo "grade: ".$grade."<br>";
echo "notes: ".$notes."<br>";