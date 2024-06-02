<?php
// memanggil library FPDF
require('fpdf184/fpdf.php');
include_once ('koneksi.php');
$query= "SELECT * FROM tb_pengguna WHERE level='Admin'";
$hasil= mysqli_query ($conn, $query);
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'DATA ADMIN',0,0,'C');
 
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'No',1,0,'C');
$pdf->Cell(50,7,'Nama' ,1,0,'C');
$pdf->Cell(75,7,'No Telepon',1,0,'C');
$pdf->Cell(55,7,'Alamat',1,0,'C');
 
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$nomor=1;
while($data = mysqli_fetch_array($hasil)){
  $pdf->Cell(10,6, $nomor++,1,0,'C');
  $pdf->Cell(50,6, $data['nama_lengkap'],1,0);
  $pdf->Cell(75,6, $data['no_telp'],1,0);  
  $pdf->Cell(55,6, $data['alamat'],1,1);
}
 
$pdf->Output();
 
?>