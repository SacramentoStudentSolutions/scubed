<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    $csc15_title = $_POST['csc15_title'];
    $csc15_units = $_POST['csc15_units'];
    $csc15_sem = $_POST['csc15_sem'];
    $csc15_grade = $_POST['csc15_grade'];
    $csc15_info = $_POST['csc15_info'];

    $csc20_title = $_POST['csc20_title'];
    $csc20_units = $_POST['csc20_units'];
    $csc20_sem = $_POST['csc20_sem'];
    $csc20_grade = $_POST['csc20_grade'];
    $csc20_info = $_POST['csc20_info'];

    $csc28_title = $_POST['csc28_title'];
    $csc28_units = $_POST['csc28_units'];
    $csc28_sem = $_POST['csc28_sem'];
    $csc28_grade = $_POST['csc28_grade'];
    $csc28_info = $_POST['csc28_info'];

    $csc35_title = $_POST['csc35_title'];
    $csc35_units = $_POST['csc35_units'];
    $csc35_sem = $_POST['csc35_sem'];
    $csc35_grade = $_POST['csc35_grade'];
    $csc35_info = $_POST['csc35_info'];

    $csc60_title = $_POST['csc60_title'];
    $csc60_units = $_POST['csc60_units'];
    $csc60_sem = $_POST['csc60_sem'];
    $csc60_grade = $_POST['csc60_grade'];
    $csc60_info = $_POST['csc60_info'];

    require_once('dbConnect.php');
    $sql = "SELECT * FROM Student WHERE SacStateID='$SacStateID'";

    $check = mysqli_fetch_array(mysqli_query($con, $sql));

    $sql = "INSERT INTO Student VALUES('$csc15_title', '$csc15_units', '$csc15_sem', '$csc15_grade', '$csc15_info',
                                       '$csc20_title', '$csc20_units', '$csc20_sem', '$csc20_grade', '$csc20_info',
                                       '$csc28_title', '$csc28_units', '$csc28_sem', '$csc28_grade', '$csc28_info',
                                       '$csc35_title', '$csc35_units', '$csc35_sem', '$csc35_grade', '$csc35_info',
                                       '$csc60_title', '$csc60_units', '$csc60_sem', '$csc60_grade', '$csc60_info',)";
    if (mysqli_query($con, $sql)) {
        $url = 'http://athena.ecs.csus.edu/~scubed/math_science.html';
        header("Location: $url");
    } else {
        echo 'Oops! Please try again!';
    }
    mysqli_close($con);
}