<?php
// memanggil library FPDF
require('fpdf184/fpdf.php');
include_once ('koneksi.php');
$query= "SELECT * FROM tb_lomba ";
$hasil= mysqli_query ($conn, $query);
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','Legal');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'DATA LOMBA',0,0,'C');
 
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'N0',1,0,'C');
$pdf->Cell(40,7,'Nama Lomba' ,1,0,'C');
$pdf->Cell(50,7,'Deskripsi',1,0,'C');
$pdf->Cell(40,7,'Penyelenggara',1,0,'C');
$pdf->Cell(20,7,'Kategori',1,0,'C');
$pdf->Cell(20,7,'Jumlah Peserta',1,0,'C');
$pdf->Cell(30,7,'Jadwal',1,0,'C');
 
 
$pdf->Cell(10,7,'',1,1);
$pdf->SetFont('Times','',10);
$no=1;
while($data = mysqli_fetch_array($hasil)){
  $pdf->Cell(10,20, $no++,1,0,'C');
  $pdf->Cell(40,20, $data['nama_lomba'],1,0);
  $pdf->Cell(50,20, $data['deskripsi'],1,0);  
  $pdf->Cell(40,20, $data['penyelenggara'],1,0);
  $pdf->Cell(20,20, $data['kategori'],1,0);
  $pdf->Cell(20,20, $data['jumlah_pst'],1,0);
  $pdf->Cell(30,20, $data['jadwal'],1,1);
}
 
$pdf->Output();
 
?>