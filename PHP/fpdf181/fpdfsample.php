<?php
/**
 * Created by PhpStorm.
 * User: Jed
 * Date: 10/29/2018
 * Time: 4:47 PM
 */
ob_start();
require('fpdf.php');
require_once('dbConnect.php');
$sql = "SELECT * FROM Student";
$result = mysqli_query($con, $sql);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();
ob_end_flush();
