<?php
/**
 * Created by PhpStorm.
 * User: Jed
 * Date: 10/29/2018
 * Time: 5:44 PM
 */

require('fpdf.php');
$pdf= new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',18);
$pdf->Cell(40,10,'THIS IS A TEST');
$pdf->output();