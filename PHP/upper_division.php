<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    $130_title = $_POST['130_title'];
    $130_units = $_POST['130_units'];
    $130_sem =   $_POST['130_sem'];
    $130_grade = $_POST['130_grade'];
    $130_info =  $_POST['130_info'];

    $131_title = $_POST['131_title'];
    $131_units = $_POST['131_units'];
    $131_sem =   $_POST['131_sem'];
    $131_grade = $_POST['131_grade'];
    $131_info =  $_POST['131_info'];

    $133_title = $_POST['133_title'];
    $133_units = $_POST['133_units'];
    $133_sem =   $_POST['133_sem'];
    $133_grade = $_POST['133_grade'];
    $133_info =  $_POST['133_info'];

    $134_title = $_POST['134_title'];
    $134_units = $_POST['134_units'];
    $134_sem =   $_POST['134_sem'];
    $134_grade = $_POST['134_grade'];
    $134_info =  $_POST['134_info'];

    $135_title = $_POST['135_title'];
    $135_units = $_POST['135_units'];
    $135_sem =   $_POST['135_sem'];
    $135_grade = $_POST['135_grade'];
    $135_info =  $_POST['135_info'];

    $137_title = $_POST['137_title'];
    $137_units = $_POST['137_units'];
    $137_sem =   $_POST['137_sem'];
    $137_grade = $_POST['137_grade'];
    $137_info =  $_POST['137_info'];

    $138_title = $_POST['138_title'];
    $138_units = $_POST['138_units'];
    $138_sem =   $_POST['138_sem'];
    $138_grade = $_POST['138_grade'];
    $138_info =  $_POST['138_info'];

    $139_title = $_POST['139_title'];
    $139_units = $_POST['139_units'];
    $139_sem =   $_POST['139_sem'];
    $139_grade = $_POST['139_grade'];
    $139_info =  $_POST['139_info'];

    $190_title = $_POST['190_title'];
    $190_units = $_POST['190_units'];
    $190_sem =   $_POST['190_sem'];
    $190_grade = $_POST['190_grade'];
    $190_info =  $_POST['190_info'];

    $191_title = $_POST['191_title'];
    $191_units = $_POST['191_units'];
    $191_sem =   $_POST['191_sem'];
    $191_grade = $_POST['191_grade'];
    $191_info =  $_POST['191_info'];



    require_once('dbConnect.php');

    $sql = "INSERT INTO Class VALUES('$130_title', '$130_units', '$130_sem', '$130_grade', '$130_info')";
    if(!mysqli_query($con, $sql)) {
        echo 'Cannot insert CSc 130 into table';
    }
    $sql = "INSERT INTO Class VALUES('$131_title', '$131_units', '$131_sem', '$131_grade', '$131_info')";
    if(!mysqli_query($con, $sql)) {
        echo 'Cannot insert CSc 131 into table';
    }
    $sql = "INSERT INTO Class VALUES('$133_title', '$133_units', '$133_sem', '$133_grade', '$133_info')";
    if(!mysqli_query($con, $sql)) {
        echo 'Cannot insert CSc 133 into table';
    }
    $sql = "INSERT INTO Class VALUES('$134_title', '$134_units', '$134_sem', '$134_grade', '$134_info')";
    if(!mysqli_query($con, $sql)) {
        echo 'Cannot insert CSc 134 into table';
    }
    $sql = "INSERT INTO Class VALUES('$135_title', '$135_units', '$135_sem', '$135_grade', '$135_info')";
    if(!mysqli_query($con, $sql)) {
        echo 'Cannot insert CSc 135 into table';
    }
    $sql = "INSERT INTO Class VALUES('$137_title', '$137_units', '$137_sem', '$137_grade', '$137_info')";
    if(!mysqli_query($con, $sql)) {
        echo 'Cannot insert CSc 137 into table';
    }
    $sql = "INSERT INTO Class VALUES('$138_title', '$138_units', '$138_sem', '$138_grade', '$138_info')";
    if(!mysqli_query($con, $sql)) {
        echo 'Cannot insert CSc 138 into table';
    }
    $sql = "INSERT INTO Class VALUES('$139_title', '$139_units', '$139_sem', '$139_grade', '$139_info')";
    if(!mysqli_query($con, $sql)) {
        echo 'Cannot insert CSc 139 into table';
    }
    $sql = "INSERT INTO Class VALUES('$190_title', '$190_units', '$190_sem', '$190_grade', '$190_info')";
    if(!mysqli_query($con, $sql)) {
        echo 'Cannot insert CSc 190 into table';
    }
    $sql = "INSERT INTO Class VALUES('$191_title', '$191_units', '$191_sem', '$191_grade', '$191_info')";
    if(!mysqli_query($con, $sql)) {
        echo 'Cannot insert CSc 191 into table';
    }
    mysqli_close($con);
}
else {
    echo 'Error';
}
?>
