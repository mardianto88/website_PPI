<?php
include '../koneksi.php';
require('../pdf/fpdf.php');

$pdf = new FPDF("L","cm","Legal");

$pdf->SetMargins(0.5,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',16);
//$pdf->Image('../logo/png.png',1,1,4,3);
$pdf->SetX(4);            
$pdf->MultiCell(29.5,0.5,'DINAS PERIKANAN KABUPATEN KOLAKA',0,'C');
$pdf->Ln(0.1);
$pdf->SetX(4);
$pdf->MultiCell(29.5,0.5,'DATA JUMLAH DAN JENIS IKAN',0,'C');    


$pdf->MultiCell(36.5,0.5,'YANG DIDARATKAN DI TPI MANGGOLO',0,'C');    
$pdf->SetFont('Arial','',12);
$pdf->SetX(4);

$pdf->MultiCell(29.5,0.5,'',0,'C');
$pdf->SetX(4);
$pdf->MultiCell(29.5,0.5,'',0,'C');
$pdf->Line(1,4.1,33.5,4.1);
//$pdf->SetLineWidth(0.1);      
$pdf->Line(1,4.2,33.5,4.2);   
$pdf->SetLineWidth(0);
//$pdf->ln(1);
//$pdf->SetFont('Arial','B',16);
//$pdf->Cell(15.5,0.7,"FORMULIR PENDAFTARAN",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);

$pdf->Cell(3, 0.8, 'ID. Lelang', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Tgl Lelang', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'Nama Kapal Motor', 1, 0, 'C');
$pdf->Cell(8, 0.8, 'Jenis Ikan', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Volume / Kg', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Harga Per KG', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Jumlah Nilai (Rp)', 1,1, 'C');

$pdf->SetFont('Arial','',12);

$tgl1   = $_GET['tgl1']; 
$tgl2   = $_GET['tgl2'];
$query=mysqli_query($koneksi, "SELECT hasil.id_transaksi, hasil.tgl, km.nama_km,  ikan.jenis_ikan, hasil.kg, hasil.harga, hasil.jumlah_harga FROM km inner join hasil on km.id_km=hasil.id_km inner join ikan on ikan.id_ikan=hasil.id_ikan where (tgl between '$tgl1' and '$tgl2')");
while($lihat=mysqli_fetch_array($query)){
  $pdf->Cell(3, 0.8, $lihat['id_transaksi'],1, 0, 'C');
  $pdf->Cell(4, 0.8, $lihat['tgl'], 1, 0,'C');
  $pdf->Cell(6, 0.8, $lihat['nama_km'], 1, 0,'L');
  $pdf->Cell(8, 0.8, $lihat['jenis_ikan'], 1, 0,'L');
  $pdf->Cell(4, 0.8, $lihat['kg'],1, 0, 'C');
  $pdf->Cell(4, 0.8, (number_format($lihat['harga'],0,",",".")), 1, 0,'R');
  $pdf->Cell(4.5, 0.8, (number_format($lihat['jumlah_harga'],0,",",".")), 1, 1,'R');
  

}

$pdf->SetFont('Arial','B',14);
 $pdf->Ln(0.0);
$tgl1   = $_GET['tgl1']; 
$tgl2   = $_GET['tgl2']; 
$jumlah_harga = mysqli_query($koneksi, "select format(sum(jumlah_harga),0) from  hasil where (tgl between '$tgl1' and '$tgl2')");
 $tampil = mysqli_fetch_array($jumlah_harga); 

$pdf->Cell(28.91, 0.9, 'Total Nilai (RP) ', 1, 0, 'L');
$pdf->Cell(4.6, 0.9,  $tampil[0], 1, 1,'R');
$pdf->Ln(0.5);


$pdf->Output("Lap_harian.pdf","I");

?>