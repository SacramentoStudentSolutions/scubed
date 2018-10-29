<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    // CSC Upper Division Electives
    // row 1
    $csc_elect1_title = $_POST['csc_elect1_title'];
    $csc_elect1_units = $_POST['csc_elect1_units'];
    $csc_elect1_sem = $_POST['csc_elect1_sem'];
    $csc_elect1_grade = $_POST['csc_elect1_grade'];
    $csc_elect1_info = $_POST['csc_elect1_info'];
    // row 2
    $csc_elect2_title = $_POST['csc_elect2_title'];
    $csc_elect2_units = $_POST['csc_elect2_units'];
    $csc_elect2_sem = $_POST['csc_elect2_sem'];
    $csc_elect2_grade = $_POST['csc_elect2_grade'];
    $csc_elect2_info = $_POST['csc_elect2_info'];
    // row 3
    $csc_elect3_title = $_POST['csc_elect3_title'];
    $csc_elect3_units = $_POST['csc_elect3_units'];
    $csc_elect3_sem = $_POST['csc_elect3_sem'];
    $csc_elect3_grade = $_POST['csc_elect3_grade'];
    $csc_elect3_info = $_POST['csc_elect3_info'];
    // Other Courses Required for the Major
    // row 1
    $phil103_title = $_POST['phil103_title'];
    $phil103_units = $_POST['phil103_units'];
    $phil103_sem = $_POST['phil103_sem'];
    $phil103_grade = $_POST['phil103_grade'];
    $phil103_info = $_POST['phil103_info'];
    // row 2
    $b2_title = $_POST['b2_title'];
    $b2_units = $_POST['b2_units'];
    $b2_sem = $_POST['b2_sem'];
    $b2_grade = $_POST['b2_grade'];
    $b2_info = $_POST['b2_info'];

	require_once('dbConnect.php');
	
	// CSC Upper Division Electives
	// row 1
	if($csc_elect1_title == '' || $csc_elect1_units == '' || $csc_elect1_sem == '' || $csc_elect1_grade == '') {
		// Something is not filled
	} else {
		$sql = "INSERT INTO class 
				VALUES('$csc_elect1_title', '$csc_elect1_units', '$csc_elect1_sem', '$csc_elect1_grade', '$csc_elect1_info')";
		if(!mysqli_query($con,$sql)){
			echo 'Can not insert CSc Elective 1 into table';
		}
	}

	// row 2
	if($csc_elect2_title == '' || $csc_elect2_units == '' || $csc_elect2_sem == '' || $csc_elect2_grade == '') {
		// Something is not filled
	} else {
		$sql = "INSERT INTO class 
				VALUES('$csc_elect2_title', '$csc_elect2_units', '$csc_elect2_sem', '$csc_elect2_grade', '$csc_elect2_info')";
		if(!mysqli_query($con,$sql)){
			echo 'Can not insert CSc Elective 2 into table';
		}
	}

	// row 3
	if($csc_elect3_title == '' || $csc_elect3_units == '' || $csc_elect3_sem == '' || $csc_elect3_grade == '') {
		// Something is not filled
	} else {
		$sql = "INSERT INTO class 
				VALUES('$csc_elect3_title', '$csc_elect3_units', '$csc_elect3_sem', '$csc_elect3_grade', '$csc_elect3_info')";
		if(!mysqli_query($con,$sql)){
			echo 'Can not insert CSc Elective 3 into table';
		}
	}

	// Other Courses Required for the Major
	// row 1
	if($phil103_title == '' || $phil103_units == '' || $phil103_sem == '' || $phil103_grade == '') {
		// Something is not filled
	} else {
		$sql = "INSERT INTO class 
				VALUES('$phil103_title', '$phil103_units', '$phil103_sem', '$phil103_grade', '$phil103_info')";
		if(!mysqli_query($con,$sql)){
			echo 'Can not insert Phil 103 into table';
		}
	}

	// row 2
	if($b2_title == '' || $b2_units == '' || $b2_sem == '' || $b2_grade == '') {
		// Something is not filled
	} else {
		$sql = "INSERT INTO class 
				VALUES('$b2_title', '$b2_units', '$b2_sem', '$b2_grade', '$b2_info')";

		if(!mysqli_query($con,$sql)){
			echo 'Can not insert B2 class into table';
		}
	}
	
	$url= "http://athena.ecs.csus.edu/~scubed/PHP/advising_form_Csc.pdf";
	header( "Location: $url" );
	mysqli_close($con);
}else{
    echo 'Error';
}
?>