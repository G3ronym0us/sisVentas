<?php

use sisVentas\Libraries\FPDF;

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Lista de Articulos');
$pdf ->ln();
$pdf ->ln();
$pdf->SetFont('Arial','B',12);
$pdf->SetLineWidth(.3);
$pdf->Cell(10,10,'ID',1,0,'C');
$pdf->Cell(40,10,'Nombre',1,0,'C');
$pdf->Cell(40,10,'Codigo',1,0,'C');
$pdf->Cell(30,10,'Categoria',1,0,'C');
$pdf->Cell(30,10,'Stock',1,0,'C');
$pdf->Cell(30,10,'Estado',1,0,'C');
$pdf ->ln();
$pdf->SetFont('Arial','',12);
foreach ($articulos as $art){
	$pdf->Cell(10,10,$art->idarticulo,1,0);
	$pdf->Cell(40,10,$art->nombre,1,0);
	$pdf->Cell(40,10,$art->codigo,1,0);
	$pdf->Cell(30,10,$art->categoria,1,0);
	$pdf->Cell(30,10,$art->stock,1,0);
	$pdf->Cell(30,10,$art->estado,1,0);
	$pdf ->ln();
}
$pdf->Output();
exit;
?>