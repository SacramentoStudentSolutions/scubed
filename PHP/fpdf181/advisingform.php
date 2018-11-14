<?php
/**
 * Created by PhpStorm.
 * User: Jed
 * Date: 10/29/2018
 * Time: 5:44 PM
 */

$course = 'CSc 15'; $units; $semester; $grade; $notes;
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
$grade = fillCell('CSc 15');
require('fpdf.php');

$pdf= new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(45,5,'',0,0);
$pdf->Cell(100,5,'Computer Science Department',0,0, 'C');
$pdf->Cell(45,5,'',0,1);
//ROW
$pdf->Cell(45,5,'',0,0);
$pdf->Cell(100,5,'STUDENT ADVISING FORM',0,0, 'C');
$pdf->Cell(45,5,'',0,1);
//ROW
$pdf->Cell(190,5,'',0,1);
//GEN INFO
$pdf->Cell(55,5,'First Name',0,0,'L');
$pdf->Cell(15,5,'M.I.',0,0,'L');
$pdf->Cell(55,5,'Last Name',0,0,'L');
$pdf->Cell(0,5,'ID#',0,1,'L');
//ROW
$pdf->Cell(190,5,'',0,1);
$pdf->Cell(55,5,'Phone Num (Cell)',0,0,'L');
$pdf->Cell(65,5,'Phone Num (Other)',0,0,'L');
$pdf->Cell(20,5,'',0,0,'L');
$pdf->Cell(35,5,'Catalog Year',0,0,'L');
//ROW
$pdf->Cell(15,5,'',0,1,'L');
$pdf->Cell(190,5,'',0,1);
$pdf->Cell(120,5,'Email Address',0,0,'L');
$pdf->Cell(20,5,'',0,0,'L');
$pdf->Cell(50,5,'Planned Graduation Date',0,1,'L');
$pdf->Cell(190,10,'',0,1);
//ROW
$pdf->Cell(85,5,'Required Lower Division CSC Courses (15 Units)',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(85,5,'CSC Upper Division Electives (9 Units)',1,1,'C');
//ROW
$pdf->Cell(20,5,'Course',1,0,'C');
$pdf->Cell(10,5,'Units',1,0,'C');
$pdf->Cell(10,5,'Sem',1,0,'C');
$pdf->Cell(15,5,'Grade',1,0,'C');
$pdf->Cell(30,5,'Notes',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(20,5,'Course',1,0,'C');
$pdf->Cell(10,5,'Units',1,0,'C');
$pdf->Cell(10,5,'Sem',1,0,'C');
$pdf->Cell(15,5,'Grade',1,0,'C');
$pdf->Cell(30,5,'Notes',1,1,'C');
//ROW
//fillCell('CSc 15');
//$course, $units, $semester, $grade, $notes;
$pdf->Cell(20,5,'CSc 15',1,0,'C');
$pdf->Cell(10,5,'3',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,$grade,1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(20,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,1,'C');
//ROW
$pdf->Cell(20,5,'CSc 20',1,0,'C');
$pdf->Cell(10,5,'3',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(20,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,1,'C');
//ROW
$pdf->Cell(20,5,'CSc 28',1,0,'C');
$pdf->Cell(10,5,'3',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(20,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,1,'C');
//ROW
$pdf->Cell(20,5,'CSc 35',1,0,'C');
$pdf->Cell(10,5,'3',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(20,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,1,'C');
//ROW
$pdf->Cell(20,5,'CSc 60',1,0,'C');
$pdf->Cell(10,5,'3',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(85,5,'Other Courses Required for Major',1,1,'C');
//ROW
$pdf->Cell(85,5,'Required Math and Science Courses (24 Units)',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(20,5,'Phil 103*',1,0,'L');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,1,'C');
//ROW
$pdf->Cell(20,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(20,5,'GE B-2^',1,0,'L');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,1,'C');
//ROW
$pdf->Cell(20,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(85,5,'^Bio 10 is recommended ',0,1,'C');
//ROW
$pdf->Cell(20,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(85,5,'',0,1,'C');
//ROW
$pdf->Cell(20,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(85,5,'',0,1,'C');
//ROW
$pdf->Cell(20,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(85,5,'Progress Review',0,1,'C');
//ROW
$pdf->Cell(20,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(50,5,'Advisor - Sign & Date Below',1,0,'C');
$pdf->Cell(10,5,'GPA',1,0,'C');
$pdf->Cell(25,5,'Dept Notes',1,1,'C');
//ROW
$pdf->Cell(20,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(50,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(25,5,'',1,1,'C');
//ROW
$pdf->Cell(20,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(50,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(25,5,'',1,1,'C');
//ROW
$pdf->Cell(20,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(50,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(25,5,'',1,1,'C');
//ROW
$pdf->Cell(85,5,'Required Upper Division CSC Courses (30 Units)',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(50,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(25,5,'',1,1,'C');
//ROW
$pdf->Cell(20,5,'CSc 130',1,0,'C');
$pdf->Cell(10,5,'3',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(50,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(25,5,'',1,1,'C');
//ROW
$pdf->Cell(20,5,'CSc 131',1,0,'C');
$pdf->Cell(10,5,'3',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(50,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(25,5,'',1,1,'C');
//ROW
$pdf->Cell(20,5,'CSc 133',1,0,'C');
$pdf->Cell(10,5,'3',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(85,5,'',0,1,'C');
//ROW
$pdf->Cell(20,5,'CSc 134',1,0,'C');
$pdf->Cell(10,5,'3',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(85,5,'',0,1,'C');
//ROW
$pdf->Cell(20,5,'CSc 135',1,0,'C');
$pdf->Cell(10,5,'3',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(85,5,'*Also satisfies GE Requirements:',0,1,'L');
//ROW
$pdf->Cell(20,5,'CSc 137',1,0,'C');
$pdf->Cell(10,5,'3',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(85,5,'Math 26A / 30 B4 - 3 units',0,1,'L');
//ROW
$pdf->Cell(20,5,'CSc 138',1,0,'C');
$pdf->Cell(10,5,'3',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(85,5,'Math 26B / 31 B4 - 3 units',0,1,'L');
//ROW
$pdf->Cell(20,5,'CSc 139',1,0,'C');
$pdf->Cell(10,5,'3',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(85,5,'Phys 5A / 11A B1 - 3 units',0,1,'L');
//ROW
$pdf->Cell(20,5,'CSc 190',1,0,'C');
$pdf->Cell(10,5,'2',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(85,5,'Phil 103 D - 3 units;        counts as upper division',0,1,'L');
//ROW
$pdf->Cell(20,5,'CSc 191',1,0,'C');
$pdf->Cell(10,5,'2',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(85,5,'',0,1,'C');
//ROW
$pdf->Cell(20,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(85,5,'',0,1,'C');
//ROW
$pdf->Cell(20,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(10,5,'',1,0,'C');
$pdf->Cell(15,5,'',1,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(85,5,'',0,1,'C');
$pdf->Output();