<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    $csc130_title = $_POST['130_title'];
    $csc130_units = $_POST['130_units'];
    $csc130_sem =   $_POST['130_sem'];
    $csc130_grade = $_POST['130_grade'];
    $csc130_info =  $_POST['130_info'];

    $csc131_title = $_POST['131_title'];
    $csc131_units = $_POST['131_units'];
    $csc131_sem =   $_POST['131_sem'];
    $csc131_grade = $_POST['131_grade'];
    $csc131_info =  $_POST['131_info'];

    $csc133_title = $_POST['133_title'];
    $csc133_units = $_POST['133_units'];
    $csc133_sem =   $_POST['133_sem'];
    $csc133_grade = $_POST['133_grade'];
    $csc133_info =  $_POST['133_info'];

    $csc134_title = $_POST['134_title'];
    $csc134_units = $_POST['134_units'];
    $csc134_sem =   $_POST['134_sem'];
    $csc134_grade = $_POST['134_grade'];
    $csc134_info =  $_POST['134_info'];

    $csc135_title = $_POST['135_title'];
    $csc135_units = $_POST['135_units'];
    $csc135_sem =   $_POST['135_sem'];
    $csc135_grade = $_POST['135_grade'];
    $csc135_info =  $_POST['135_info'];

    $csc137_title = $_POST['137_title'];
    $csc137_units = $_POST['137_units'];
    $csc137_sem =   $_POST['137_sem'];
    $csc137_grade = $_POST['137_grade'];
    $csc137_info =  $_POST['137_info'];

    $csc138_title = $_POST['138_title'];
    $csc138_units = $_POST['138_units'];
    $csc138_sem =   $_POST['138_sem'];
    $csc138_grade = $_POST['138_grade'];
    $csc138_info =  $_POST['138_info'];

    $csc139_title = $_POST['139_title'];
    $csc139_units = $_POST['139_units'];
    $csc139_sem =   $_POST['139_sem'];
    $csc139_grade = $_POST['139_grade'];
    $csc139_info =  $_POST['139_info'];

    $csc190_title = $_POST['190_title'];
    $csc190_units = $_POST['190_units'];
    $csc190_sem =   $_POST['190_sem'];
    $csc190_grade = $_POST['190_grade'];
    $csc190_info =  $_POST['190_info'];

    $csc191_title = $_POST['191_title'];
    $csc191_units = $_POST['191_units'];
    $csc191_sem =   $_POST['191_sem'];
    $csc191_grade = $_POST['191_grade'];
    $csc191_info =  $_POST['191_info'];



    require_once('dbConnect.php');

	if($csc130_title == '' || $csc130_units == '' || $csc130_sem == '' || $csc130_grade == '') {
		// Something is not filled.
	} else {
		$sql = "INSERT INTO class 
				VALUES('$csc130_title', '$csc130_units', '$csc130_sem', '$csc130_grade', '$csc130_info')";
		if(!mysqli_query($con, $sql)) {
			echo 'Cannot insert CSc 130 into table';
		}
	}
	
	if($csc131_title == '' || $csc131_units == '' || $csc131_sem == '' || $csc131_grade == '') {
		// Something is not filled.
	} else {
		$sql = "INSERT INTO class 
				VALUES('$csc131_title', '$csc131_units', '$csc131_sem', '$csc131_grade', '$csc131_info')";
		if(!mysqli_query($con, $sql)) {
			echo 'Cannot insert CSc 131 into table';
		}
	}
	
	if($csc133_title == '' || $csc133_units == '' || $csc133_sem == '' || $csc133_grade == '') {
		// Something is not filled.
	} else {
		$sql = "INSERT INTO class 
				VALUES('$csc133_title', '$csc133_units', '$csc133_sem', '$csc133_grade', '$csc133_info')";
		if(!mysqli_query($con, $sql)) {
			echo 'Cannot insert CSc 133 into table';
		}
	}
	
	if($csc134_title == '' || $csc134_units == '' || $csc134_sem == '' || $csc134_grade == '') {
		// Something is not filled.
	} else {
		$sql = "INSERT INTO class 
				VALUES('$csc134_title', '$csc134_units', '$csc134_sem', '$csc134_grade', '$csc134_info')";
		if(!mysqli_query($con, $sql)) {
			echo 'Cannot insert CSc 134 into table';
		}
	}
	
	if($csc135_title == '' || $csc135_units == '' || $csc135_sem == '' || $csc135_grade == '') {
		// Something is not filled.
	} else {
		$sql = "INSERT INTO class 
				VALUES('$csc135_title', '$csc135_units', '$csc135_sem', '$csc135_grade', '$csc135_info')";
		if(!mysqli_query($con, $sql)) {
			echo 'Cannot insert CSc 135 into table';
		}
	}
	
	if($csc137_title == '' || $csc137_units == '' || $csc137_sem == '' || $csc137_grade == '') {
		// Something is not filled.
	} else {
		$sql = "INSERT INTO class 
				VALUES('$csc137_title', '$csc137_units', '$csc137_sem', '$csc137_grade', '$csc137_info')";
		if(!mysqli_query($con, $sql)) {
			echo 'Cannot insert CSc 137 into table';
		}
	}
	
	if($csc138_title == '' || $csc138_units == '' || $csc138_sem == '' || $csc138_grade == '') {
		// Something is not filled.
	} else {
		$sql = "INSERT INTO class 
				VALUES('$csc138_title', '$csc138_units', '$csc138_sem', '$csc138_grade', '$csc138_info')";
		if(!mysqli_query($con, $sql)) {
			echo 'Cannot insert CSc 138 into table';
		}
	}
	
	if($csc139_title == '' || $csc139_units == '' || $csc139_sem == '' || $csc139_grade == '') {
		// Something is not filled.
	} else {
		$sql = "INSERT INTO class 
				VALUES('$csc139_title', '$csc139_units', '$csc139_sem', '$csc139_grade', '$csc139_info')";
		if(!mysqli_query($con, $sql)) {
			echo 'Cannot insert CSc 139 into table';
		}
	}
	
	if($csc190_title == '' || $csc190_units == '' || $csc190_sem == '' || $csc190_grade == '') {
		// Something is not filled.
	} else {
		$sql = "INSERT INTO class 
				VALUES('$csc190_title', '$csc190_units', '$csc190_sem', '$csc190_grade', '$csc190_info')";
		if(!mysqli_query($con, $sql)) {
			echo 'Cannot insert CSc 190 into table';
		}
	}
	
	if($csc191_title == '' || $csc191_units == '' || $csc191_sem == '' || $csc191_grade == '') {
		// Something is not filled.
	} else {
		$sql = "INSERT INTO class 
				VALUES('$csc191_title', '$csc191_units', '$csc191_sem', '$csc191_grade', '$csc191_info')";
		if(!mysqli_query($con, $sql)) {
			echo 'Cannot insert CSc 191 into table';
		}
	}
	
	$url = 'http://athena.ecs.csus.edu/~scubed/electives_others.html';
	header( "Location: $url" );
    mysqli_close($con);
}
else {
    echo 'Error';
}
?>
