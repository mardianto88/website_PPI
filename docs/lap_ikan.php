<?php
include 'koneksi.php';
require('pdf/fpdf.php');

$pdf = new FPDF("P","cm","Legal");

$pdf->SetMargins(0.5,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',16);
//$pdf->Image('../logo/png.png',1,1,4,3);
$pdf->SetX(4);            
$pdf->MultiCell(15.0,0.5,'DINAS PERIKANAN KABUPATEN KOLAKA',0,'C');
$pdf->Ln(0.1);
$pdf->SetX(4);
$pdf->MultiCell(15.5,0.5,'LAPORAN DATA JENIS IKAN',0,'C');    


$pdf->MultiCell(22.2,0.5,'YANG DIDARATKAN DI TPI MANGGOLO',0,'C');    
$pdf->SetFont('Arial','',12);
$pdf->SetX(4);

$pdf->MultiCell(20.5,0.5,'',0,'C');
$pdf->SetX(4);
$pdf->MultiCell(20.5,0.5,'',0,'C');
$pdf->Line(1,4.1,20.5,4.1);
//$pdf->SetLineWidth(0.1);      
$pdf->Line(1,4.2,20.5,4.2);   
$pdf->SetLineWidth(0);
//$pdf->ln(1);
//$pdf->SetFont('Arial','B',16);
//$pdf->Cell(15.5,0.7,"FORMULIR PENDAFTARAN",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);

$pdf->Cell(3, 0.8, 'No. Urut', 1, 0, 'C');
$pdf->Cell(16.9, 0.8, 'Jenis Ikan', 1,1, 'C');

$pdf->SetFont('Arial','',12);


$query=mysqli_query($koneksi, "SELECT * from ikan");
while($lihat=mysqli_fetch_array($query)){
  $pdf->Cell(3, 0.8, $lihat['id_ikan'],1, 0, 'C');
  $pdf->Cell(16.9, 0.8, $lihat['jenis_ikan'], 1, 1,'L');
  
  

}

$pdf->Output("lap_ikan.pdf","I");

?>