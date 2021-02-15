<?php


if($_SERVER['REQUEST_METHOD']=='POST'){

    $math26A_30_title = $_POST['math26A_30_title'];
    $math26A_30_units = $_POST['math26A_30_units'];
    $math26A_30_sem = $_POST['math26A_30_sem'];
    $math26A_30_grade = $_POST['math26A_30_grade'];
    $math26A_30_info = $_POST['math26A_30_info'];

    $math26B_31_title = $_POST['math26B_31_title'];
    $math26B_31_units = $_POST['math26B_31_units'];
    $math26B_31_sem = $_POST['math26B_31_sem'];
    $math26B_31_grade = $_POST['math26B_31_grade'];
    $math26B_31_info = $_POST['math26B_31_info'];

    $engr115_stat50_title = $_POST['engr115_stat50_title'];
    $engr115_stat50_units = $_POST['engr115_stat50_units'];
    $engr115_stat50_sem = $_POST['engr115_stat50_sem'];
    $engr115_stat50_grade = $_POST['engr115_stat50_grade'];
    $engr115_stat50_info = $_POST['engr115_stat50_info'];

    $Phys5A_11A_title = $_POST['Phys5A_11A_title'];
    $Phys5A_11A_units = $_POST['Phys5A_11A_units'];
    $Phys5A_11A_sem = $_POST['Phys5A_11A_sem'];
    $Phys5A_11A_grade = $_POST['Phys5A_11A_grade'];
    $Phys5A_11A_info = $_POST['Phys5A_11A_info'];

    $math_sci_elect1_title = $_POST['math_sci_elect1_title'];
    $math_sci_elect1_units = $_POST['math_sci_elect1_units'];
    $math_sci_elect1_sem = $_POST['math_sci_elect1_sem'];
    $math_sci_elect1_grade = $_POST['math_sci_elect1_grade'];
    $math_sci_elect1_info = $_POST['math_sci_elect1_info'];


    $math_sci_elect2_title = $_POST['math_sci_elect2_title'];
    $math_sci_elect2_units = $_POST['math_sci_elect2_units'];
    $math_sci_elect2_sem = $_POST['math_sci_elect2_sem'];
    $mat_sci_elect2_grade = $_POST['math_sci_elect2_grade'];
    $math_sci_elect2_info = $_POST['math_sci_elect2_info'];

    $math_sci_elect3_title = $_POST['math_sci_elect3_title'];
    $math_sci_elect3_units = $_POST['math_sci_elect3_units'];
    $math_sci_elect3_sem = $_POST['math_sci_elect3_sem'];
    $math_sci_elect3_grade = $_POST['math_sci_elect3_grade'];
    $math_sci_elect3_info = $_POST['math_sci_elect3_info'];

    $math_sci_elect4_title = $_POST['math_sci_elect4_title'];
    $math_sci_elect4_units = $_POST['math_sci_elect4_units'];
    $math_sci_elect4_sem = $_POST['math_sci_elect4_sem'];
    $math_sci_elect4_grade = $_POST['math_sci_elect4_grade'];
    $math_sci_elect4_info = $_POST['math_sci_elect4_info'];

    $math_sci_elect5_title = $_POST['math_sci_elect5_title'];
    $math_sci_elect5_units = $_POST['math_sci_elect5_units'];
    $math_sci_elect5_sem = $_POST['math_sci_elect5_sem'];
    $math_sci_elect5_grade = $_POST['math_sci_elect5_grade'];
    $math_sci_elect5_info = $_POST['math_sci_elect5_info'];

    $math_sci_elect6_title = $_POST['math_sci_elect6_title'];
    $math_sci_elect6_units = $_POST['math_sci_elect6_units'];
    $math_sci_elect6_sem = $_POST['math_sci_elect6_sem'];
    $math_sci_elect6_grade = $_POST['math_sci_elect6_grade'];
    $math_sci_elect6_info = $_POST['math_sci_elect6_info'];
		
	require_once('dbConnect.php');

	if($math26A_30_title == '' || $math26A_30_units == '' || $math26A_30_sem == '' || $math26A_30_grade == ''){
		// Something is not filled
	} else {
		$sql = "INSERT INTO class 
				VALUES('$math26A_30_title', '$math26A_30_units', '$math26A_30_sem', '$math26A_30_grade', '$math26A_30_info')";
		if(!mysqli_query($con,$sql)){
			echo 'Can not insert math26A_30 into table';
		}
	}

	if($math26B_31_title == '' || $math26B_31_units == '' || $math26B_31_sem == '' || $math26B_31_grade == ''){
		// Something is not filled
	} else {
		$sql = "INSERT INTO class 
				VALUES('$math26B_31_title', '$math26B_31_units', '$math26B_31_sem', '$math26B_31_grade', '$math26B_31_info')";
		if(!mysqli_query($con,$sql)){
			echo 'Can not insert math 26B_31 into table';
		}
	}

	if($engr115_stat50_title == '' || $engr115_stat50_units == '' || $engr115_stat50_sem == '' || $engr115_stat50_grade == ''){
		// Something is not filled
	} else {
		$sql = "INSERT INTO class 
				VALUES('$engr115_stat50_title', '$engr115_stat50_units', '$engr115_stat50_sem', '$engr115_stat50_grade', '$engr115_stat50_info')";
		if(!mysqli_query($con,$sql)){
			echo 'Can not insert engr115_stat50 into table';
		}
	}

	if($Phys5A_11A_title == '' || $Phys5A_11A_units == '' || $Phys5A_11A_sem == '' || $Phys5A_11A_grade == ''){
		// Something is not filled
	} else {
		$sql = "INSERT INTO class 
				VALUES('$Phys5A_11A_title', '$Phys5A_11A_units', '$Phys5A_11A_sem', '$Phys5A_11A_grade', '$Phys5A_11A_info')";
		if(!mysqli_query($con,$sql)){
			echo 'Can not insert Pbys5A_11A into table';
		}
	}

	if($math_sci_elect1_title == '' || $math_sci_elect1_units == '' || $math_sci_elect1_sem == '' || $math_sci_elect1_grade == ''){
		// Something is not filled
	} else {
		$sql = "INSERT INTO class 
				VALUES('$math_sci_elect1_title', '$math_sci_elect1_units', '$math_sci_elect1_sem', '$math_sci_elect1_grade', '$math_sci_elect1_info')";
		if(!mysqli_query($con,$sql)){
			echo 'Can not insert math_sci_elect1 into table';
		}
	}

	if($math_sci_elect2_title == '' || $math_sci_elect2_units == '' || $math_sci_elect2_sem == '' || $math_sci_elect2_grade == ''){
		// Something is not filled
	} else {
		$sql = "INSERT INTO class 
				VALUES('$math_sci_elect2_title', '$math_sci_elect2_units', '$math_sci_elect2_sem', '$math_sci_elect2_grade', '$math_sci_elect2_info')";
		if(!mysqli_query($con,$sql)){
			echo 'Can not insert math_sci_elect2 into table';
		}
	}

	if($math_sci_elect3_title == '' || $math_sci_elect3_units == '' || $math_sci_elect3_sem == '' || $math_sci_elect3_grade == ''){
		// Something is not filled
	} else {
		$sql = "INSERT INTO class 
				VALUES('$math_sci_elect3_title', '$math_sci_elect3_units', '$math_sci_elect3_sem', '$math_sci_elect3_grade', '$math_sci_elect3_info')";
		if(!mysqli_query($con,$sql)){
			echo 'Can not insert math_sci_elect3 into table';
		}
	}

	if($math_sci_elect4_title == '' || $math_sci_elect4_units == '' || $math_sci_elect4_sem == '' || $math_sci_elect4_grade == ''){
		// Something is not filled
	} else {
		$sql = "INSERT INTO class 
				VALUES('$math_sci_elect4_title', '$math_sci_elect4_units', '$math_sci_elect4_sem', '$math_sci_elect4_grade', '$math_sci_elect4_info')";
		if(!mysqli_query($con,$sql)){
			echo 'Can not insert math_sci_elect4 into table';
		}
	}

	if($math_sci_elect5_title == '' || $math_sci_elect5_units == '' || $math_sci_elect5_sem == '' || $math_sci_elect5_grade == ''){
		// Something is not filled
	} else {
		$sql = "INSERT INTO class 
				VALUES('$math_sci_elect5_title', '$math_sci_elect5_units', '$math_sci_elect5_sem', '$math_sci_elect5_grade', '$math_sci_elect5_info')";
		if(!mysqli_query($con,$sql)){
			echo 'Can not insert math_sci_elect5 into table';
		}
	}

	if($math_sci_elect6_title == '' || $math_sci_elect6_units == '' || $math_sci_elect6_sem == '' || $math_sci_elect6_grade == ''){
		// Something is not filled
	} else {
		// Course and Grade are not showing up.  They are inserted as null when it should not be allowed.????????????
		$sql = "INSERT INTO class 
				VALUES('$math_sci_elect6_title', '$math_sci_elect6_units', '$math_sci_elect6_sem', '$math_sci_elect6_grade', '$math_sci_elect6_info')";

		if(!mysqli_query($con,$sql)){
			echo 'Can not insert math_sci_elect6 class into table';
		}
	}

	$url = 'http://athena.ecs.csus.edu/~scubed/branch/advising_form.html#upper_division';
	header( "Location: $url" );
	mysqli_close($con);
}else{
    echo 'Error';
}
?>