<?php

include "vendor/autoload.php";

use Fpdf\Fpdf;

$pdf = new Fpdf('P', 'mm', 'Legal');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 21);
$pdf->Cell(0.1, 20, 'Gabriel Rhobert P. Dy', 0);
$pdf->SetFont('Arial', 'B', 18);
$pdf->Cell(0.1, 45, 'BS Information Technology', 0);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(0.1, 65, 'dy.gabrielrhobert@auf.edu.ph', 0);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(0.1, 85, '20-0462-396', 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(25, 200, 'PDC10 - Tutorial 1');
$pdf->Output();