<?php
/**
 * Created by PhpStorm.
 * User: Jed
 * Date: 10/29/2018
 * Time: 5:42 PM
 */

ob_start();
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();
ob_end_flush();