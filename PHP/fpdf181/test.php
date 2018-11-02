<?php
require_once('dbConnect.php');
/*$sql = "SELECT * FROM class";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo $row["Course"];
		echo $row["Units"];
		echo $row["Semester"];
		echo $row["Grade"];
		echo $row["Notes"];
	}
} else {
	echo "0 results";
}*/
$sql = "SELECT * FROM class Where Course='CSc 15'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $course = $row["Course"];
        $units  = $row["Units"];
        $semester  = $row["Semester"];
        $grade  = $row["Grade"];
        $notes  = $row["Notes"];
    }
} else {
    echo "";
}
echo $grade;
echo $course;
mysqli_close($con);