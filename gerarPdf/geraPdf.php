<?php
require "fpdf185/fpdf.php";

$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont("Arial", "B","16");
$pdf->Cell(200,10,("Gerador de PDF"),0,0,"C");
$pdf->Ln(50);

$pdf->SetFont("Arial", "I","12");
$pdf->Cell(49,40,"Nome",1,0,"C");
$pdf->Cell(49,40,"Curso",1,0,"C");
$pdf->Cell(49,40,"Disciplina",1,0,"C");
$pdf->Cell(49,40,"Nota",1,5,"C");
$pdf->Ln(1);

$pdf->Cell(49,20,"Gledson",1,0,"C");
$pdf->Cell(49,20,"ADS",1,0,"C");
$pdf->Cell(49,20,"LTP II",1,0,"C");
$pdf->Cell(49,20,"8.5",1,5,"C");
$pdf->Ln(1);

$pdf->Cell(49,20,"Kennet",1,0,"C");
$pdf->Cell(49,20,"ADS",1,0,"C");
$pdf->Cell(49,20,"LTP II",1,0,"C");
$pdf->Cell(49,20,"7",1,5,"C");
$pdf->Ln(1);

$pdf->Cell(49,20,utf8_decode("João Victor"),1,0,"C");
$pdf->Cell(49,20,"ADS",1,0,"C");
$pdf->Cell(49,20,"LTP II",1,0,"C");
$pdf->Cell(49,20,"9",1,5,"C");
$pdf->Ln(1);

$pdf->Cell(49,20,"Marcus",1,0,"C");
$pdf->Cell(49,20,"ADS",1,0,"C");
$pdf->Cell(49,20,"LTP II",1,0,"C");
$pdf->Cell(49,20,"7.5",1,5,"C");
$pdf->Ln(1);

$pdf->Cell(49,20,"Lucas",1,0,"C");
$pdf->Cell(49,20,"ADS",1,0,"C");
$pdf->Cell(49,20,"LTP II",1,0,"C");
$pdf->Cell(49,20,"6.8",1,5,"C");
$pdf->Ln(1);

$pdf->Cell(49,20,"Gabriel",1,0,"C");
$pdf->Cell(49,20,"ADS",1,0,"C");
$pdf->Cell(49,20,"LTP II",1,0,"C");
$pdf->Cell(49,20,"7.7",1,5,"C");
$pdf->Output();
