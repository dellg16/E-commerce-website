<?php 
$id=1;
$name="Ruchita";
$Email="@gmail.com";
$Address="newasa";
$City="newasa";
$Quantity="2";

require("fpdf184/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','','10');
$pdf->Cell(0,5,'Total Bill',0,1,'C');
$pdf->Cell(0,10,'----------------------------------------------------------------------------------------------------------------------------------------------------------------------',0,1);
$pdf->Cell(15,5,'Name',0,0);

$pdf->Cell(20,5,'Address',0,0);
$pdf->Cell(20,5,'Mobile',0,0);
$pdf->Cell(20,5,'Email:',0,0);
$pdf->Cell(30,5,'Item Name :',0,0);
$pdf->Cell(30,5,'Item Quantity :',0,0);
$pdf->Cell(0,5,'Total Price:',0,1);
$pdf->Cell(15,10,$name,0,0);
$pdf->Cell(15,10,'newasa',0,0);
$pdf->Cell(25,10,'1287467322',0,0);
$pdf->Cell(20,10,$Email,0,0);
$pdf->Cell(30,10,'Mobile',0,0);
$pdf->Cell(30,10,$Quantity,0,0);
$pdf->Cell(0,10,'80000',0,1);
$pdf->Cell(0,10,'----------------------------------------------------------------------------------------------------------------------------------------------------------------------',0,1);

$pdf->output();

?>