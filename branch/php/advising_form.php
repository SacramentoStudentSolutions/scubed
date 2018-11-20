<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    // General Info
    $SacStateID = $_POST['SacStateID'];
    $LastName = $_POST['LastName'];
    $MiddleInitial = $_POST['MiddleInitial'];
    $FirstName = $_POST['FirstName'];
    $EmailAddress = $_POST['EmailAddress'];
    $CellPhoneNumber = $_POST['CellPhoneNumber'];
    $CatalogYear = $_POST['CatalogYear'];
    $PlannedGraduationDate = $_POST['PlannedGraduationDate'];

    // Lower Division
    // Row 1
    $csc15_title = $_POST['csc15_title'];
    $csc15_units = $_POST['csc15_units'];
    $csc15_sem = $_POST['csc15_sem'];
    $csc15_grade = $_POST['csc15_grade'];
    $csc15_info = $_POST['csc15_info'];

    // Row 2
    $csc20_title = $_POST['csc20_title'];
    $csc20_units = $_POST['csc20_units'];
    $csc20_sem = $_POST['csc20_sem'];
    $csc20_grade = $_POST['csc20_grade'];
    $csc20_info = $_POST['csc20_info'];

    // Row 3
    $csc28_title = $_POST['csc28_title'];
    $csc28_units = $_POST['csc28_units'];
    $csc28_sem = $_POST['csc28_sem'];
    $csc28_grade = $_POST['csc28_grade'];
    $csc28_info = $_POST['csc28_info'];

    // Row 4
    $csc35_title = $_POST['csc35_title'];
    $csc35_units = $_POST['csc35_units'];
    $csc35_sem = $_POST['csc35_sem'];
    $csc35_grade = $_POST['csc35_grade'];
    $csc35_info = $_POST['csc35_info'];

    // Row 5
    $csc60_title = $_POST['csc60_title'];
    $csc60_units = $_POST['csc60_units'];
    $csc60_sem = $_POST['csc60_sem'];
    $csc60_grade = $_POST['csc60_grade'];
    $csc60_info = $_POST['csc60_info'];

    // Math & Science
    // Row 1
    $math26A_30_title = $_POST['math26A_30_title'];
    $math26A_30_units = $_POST['math26A_30_units'];
    $math26A_30_sem = $_POST['math26A_30_sem'];
    $math26A_30_grade = $_POST['math26A_30_grade'];
    $math26A_30_info = $_POST['math26A_30_info'];

    // Row 2
    $math26B_31_title = $_POST['math26B_31_title'];
    $math26B_31_units = $_POST['math26B_31_units'];
    $math26B_31_sem = $_POST['math26B_31_sem'];
    $math26B_31_grade = $_POST['math26B_31_grade'];
    $math26B_31_info = $_POST['math26B_31_info'];

    // Row 3
    $engr115_stat50_title = $_POST['engr115_stat50_title'];
    $engr115_stat50_units = $_POST['engr115_stat50_units'];
    $engr115_stat50_sem = $_POST['engr115_stat50_sem'];
    $engr115_stat50_grade = $_POST['engr115_stat50_grade'];
    $engr115_stat50_info = $_POST['engr115_stat50_info'];

    // Row 4
    $Phys5A_11A_title = $_POST['Phys5A_11A_title'];
    $Phys5A_11A_units = $_POST['Phys5A_11A_units'];
    $Phys5A_11A_sem = $_POST['Phys5A_11A_sem'];
    $Phys5A_11A_grade = $_POST['Phys5A_11A_grade'];
    $Phys5A_11A_info = $_POST['Phys5A_11A_info'];

    // Row 5
    $math_sci_elect1_title = $_POST['math_sci_elect1_title'];
    $math_sci_elect1_units = $_POST['math_sci_elect1_units'];
    $math_sci_elect1_sem = $_POST['math_sci_elect1_sem'];
    $math_sci_elect1_grade = $_POST['math_sci_elect1_grade'];
    $math_sci_elect1_info = $_POST['math_sci_elect1_info'];

    // Row 6
    $math_sci_elect2_title = $_POST['math_sci_elect2_title'];
    $math_sci_elect2_units = $_POST['math_sci_elect2_units'];
    $math_sci_elect2_sem = $_POST['math_sci_elect2_sem'];
    $mat_sci_elect2_grade = $_POST['math_sci_elect2_grade'];
    $math_sci_elect2_info = $_POST['math_sci_elect2_info'];

    // Row 7
    $math_sci_elect3_title = $_POST['math_sci_elect3_title'];
    $math_sci_elect3_units = $_POST['math_sci_elect3_units'];
    $math_sci_elect3_sem = $_POST['math_sci_elect3_sem'];
    $math_sci_elect3_grade = $_POST['math_sci_elect3_grade'];
    $math_sci_elect3_info = $_POST['math_sci_elect3_info'];

    // Row 8
    $math_sci_elect4_title = $_POST['math_sci_elect4_title'];
    $math_sci_elect4_units = $_POST['math_sci_elect4_units'];
    $math_sci_elect4_sem = $_POST['math_sci_elect4_sem'];
    $math_sci_elect4_grade = $_POST['math_sci_elect4_grade'];
    $math_sci_elect4_info = $_POST['math_sci_elect4_info'];

    // Row 9
    $math_sci_elect5_title = $_POST['math_sci_elect5_title'];
    $math_sci_elect5_units = $_POST['math_sci_elect5_units'];
    $math_sci_elect5_sem = $_POST['math_sci_elect5_sem'];
    $math_sci_elect5_grade = $_POST['math_sci_elect5_grade'];
    $math_sci_elect5_info = $_POST['math_sci_elect5_info'];

    // Row 10
    $math_sci_elect6_title = $_POST['math_sci_elect6_title'];
    $math_sci_elect6_units = $_POST['math_sci_elect6_units'];
    $math_sci_elect6_sem = $_POST['math_sci_elect6_sem'];
    $math_sci_elect6_grade = $_POST['math_sci_elect6_grade'];
    $math_sci_elect6_info = $_POST['math_sci_elect6_info'];

    // Upper Division
    // Row 1
    $csc130_title = $_POST['130_title'];
    $csc130_units = $_POST['130_units'];
    $csc130_sem =   $_POST['130_sem'];
    $csc130_grade = $_POST['130_grade'];
    $csc130_info =  $_POST['130_info'];

    // Row 2
    $csc131_title = $_POST['131_title'];
    $csc131_units = $_POST['131_units'];
    $csc131_sem =   $_POST['131_sem'];
    $csc131_grade = $_POST['131_grade'];
    $csc131_info =  $_POST['131_info'];

    // Row 3
    $csc133_title = $_POST['133_title'];
    $csc133_units = $_POST['133_units'];
    $csc133_sem =   $_POST['133_sem'];
    $csc133_grade = $_POST['133_grade'];
    $csc133_info =  $_POST['133_info'];

    // Row 4
    $csc134_title = $_POST['134_title'];
    $csc134_units = $_POST['134_units'];
    $csc134_sem =   $_POST['134_sem'];
    $csc134_grade = $_POST['134_grade'];
    $csc134_info =  $_POST['134_info'];

    // Row 5
    $csc135_title = $_POST['135_title'];
    $csc135_units = $_POST['135_units'];
    $csc135_sem =   $_POST['135_sem'];
    $csc135_grade = $_POST['135_grade'];
    $csc135_info =  $_POST['135_info'];

    // Row 6
    $csc137_title = $_POST['137_title'];
    $csc137_units = $_POST['137_units'];
    $csc137_sem =   $_POST['137_sem'];
    $csc137_grade = $_POST['137_grade'];
    $csc137_info =  $_POST['137_info'];

    // Row 7
    $csc138_title = $_POST['138_title'];
    $csc138_units = $_POST['138_units'];
    $csc138_sem =   $_POST['138_sem'];
    $csc138_grade = $_POST['138_grade'];
    $csc138_info =  $_POST['138_info'];

    // Row 8
    $csc139_title = $_POST['139_title'];
    $csc139_units = $_POST['139_units'];
    $csc139_sem =   $_POST['139_sem'];
    $csc139_grade = $_POST['139_grade'];
    $csc139_info =  $_POST['139_info'];

    // Row 9
    $csc190_title = $_POST['190_title'];
    $csc190_units = $_POST['190_units'];
    $csc190_sem =   $_POST['190_sem'];
    $csc190_grade = $_POST['190_grade'];
    $csc190_info =  $_POST['190_info'];

    // Row 10
    $csc191_title = $_POST['191_title'];
    $csc191_units = $_POST['191_units'];
    $csc191_sem =   $_POST['191_sem'];
    $csc191_grade = $_POST['191_grade'];
    $csc191_info =  $_POST['191_info'];

    // Upper Division Electives
    // Row 1
    $csc_elect1_title = $_POST['csc_elect1_title'];
    $csc_elect1_units = $_POST['csc_elect1_units'];
    $csc_elect1_sem = $_POST['csc_elect1_sem'];
    $csc_elect1_grade = $_POST['csc_elect1_grade'];
    $csc_elect1_info = $_POST['csc_elect1_info'];
    // Row 2
    $csc_elect2_title = $_POST['csc_elect2_title'];
    $csc_elect2_units = $_POST['csc_elect2_units'];
    $csc_elect2_sem = $_POST['csc_elect2_sem'];
    $csc_elect2_grade = $_POST['csc_elect2_grade'];
    $csc_elect2_info = $_POST['csc_elect2_info'];
    // Row 3
    $csc_elect3_title = $_POST['csc_elect3_title'];
    $csc_elect3_units = $_POST['csc_elect3_units'];
    $csc_elect3_sem = $_POST['csc_elect3_sem'];
    $csc_elect3_grade = $_POST['csc_elect3_grade'];
    $csc_elect3_info = $_POST['csc_elect3_info'];
    // Other Courses Required for the Major
    // Row 1
    $phil103_title = $_POST['phil103_title'];
    $phil103_units = $_POST['phil103_units'];
    $phil103_sem = $_POST['phil103_sem'];
    $phil103_grade = $_POST['phil103_grade'];
    $phil103_info = $_POST['phil103_info'];
    // Row 2
    $b2_title = $_POST['b2_title'];
    $b2_units = $_POST['b2_units'];
    $b2_sem = $_POST['b2_sem'];
    $b2_grade = $_POST['b2_grade'];
    $b2_info = $_POST['b2_info'];

    // Connect to the database
    require_once('dbConnect.php');

    // General Tab

    // Lower Division Tab

    // Math & Science Tab

    // Upper Division Tab

    // Electives & Other Tab

    // Disconnect from the database
    mysqli_close($con);

    // Go to advising form pdf
    $url = 'http://athena.ecs.csus.edu/~scubed/branch/php/advising_form_to_pdf.php';
    header( "Location: $url" );
} else {
    echo 'Error';
}