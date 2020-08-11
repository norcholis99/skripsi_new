<?php include 'suport.php';
 ?>

 <?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('L','mm','A4');

// membuat halaman baru
$pdf->AddPage();

$pdf->image('mmp.png',80,11,13,13);
// setting jenis font yang akan digunakan

$pdf->SetFont('Arial','B',12);
$pdf->Cell(280,5,'PT. MEGAH MEDIKA PHARMA Cabang Banjarmasin',0,1,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell(280,5,'Jl. Gubernur Soebarjo Km 18 Komplek Pergudangan Bizpark',0,1,'C');
$pdf->Cell(280,5,'Gambut - Kalimantan Selatan Telp. (0511 123 8890)',0,1,'C');

//buat garis horisontal
$pdf->Line(10,28,285,28);
$pdf->Line(10,28,285,28);

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$bln_list = array(
  '01' => 'Januari',
  '02' => 'Februari',
  '03' => 'Maret',
  '04' => 'April',
  '05' => 'Mei',
  '06' => 'Juni',
  '07' => 'Juli',
  '08' => 'Agustus',
  '09' => 'September',
  '10' => 'Oktober',
  '11' => 'November',
  '12' => 'Desember'
);

$pdf->SetFont('Arial','',10);
$pdf->SetX(9);
$pdf->MultiCell(95,10,'Laporan Data Kunjunga Sales Periode Bulan '.$bln_list[date('m')].' '.date('Y'),0,'C');
	
$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,6,'Tanggal',1,0,'C');
$pdf->Cell(40,6,'Rumah Sakit',1,0,'C');
$pdf->Cell(30,6,'Ruangan',1,0,'C');
$pdf->Cell(30,6,'User',1,0,'C');
$pdf->Cell(80,6,'Hasil Kunjungan',1,0,'C');
$pdf->Cell(70,6,'Comment BM',1,1,'C');

$pdf->SetFont('Arial','',8);

include '03_koneksi.php';
$sales = mysqli_query($kon, "select * from sales order by tanggal asc");
while ($row = mysqli_fetch_array($sales)){
    $pdf->Cell(25,6,$row['tanggal'],1,0,'C');
    $pdf->Cell(40,6,$row['rumahsakit'],1,0);
    $pdf->Cell(30,6,$row['ruangan'],1,0);
    $pdf->Cell(30,6,$row['user'],1,0); 
    $pdf->Cell(80,6,$row['hasil'],1,0); 
    $pdf->Cell(70,6,$row['respon'],1,1); 
}

# untuk menuliskan nama bulan dengan format Indonesia
$bln_list = array(
  '01' => 'Januari',
  '02' => 'Februari',
  '03' => 'Maret',
  '04' => 'April',
  '05' => 'Mei',
  '06' => 'Juni',
  '07' => 'Juli',
  '08' => 'Agustus',
  '09' => 'September',
  '10' => 'Oktober',
  '11' => 'November',
  '12' => 'Desember'
);

# footer
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','',10);
$pdf->SetX(120);
$pdf->MultiCell(240,10,'Banjarmasin, '.date('d').' '.$bln_list[date('m')].' '.date('Y'),0,'C');
$pdf->SetX(120);
$pdf->MultiCell(240,0, 'Marketing',0,'C');
$pdf->SetX(120);
$pdf->MultiCell(240,20, ' ',0,'C');
$pdf->SetX(120);
$pdf->MultiCell(240,1, 'Nurkholis',0,'C');
$pdf->SetX(120);
$pdf->MultiCell(240,1, '______________',0,'C');
$pdf->SetX(120);
$pdf->MultiCell(240,8, 'NIK : 2016020403',0,'C');
$pdf->Ln();

	//atur posisi 1.5 cm dari bawah
	$pdf->SetY(-20);
	//buat garis horizontal
	$pdf->Line(10,$pdf->GetY(),285,$pdf->GetY());
	//Arial italic 9
	$pdf->SetFont('Arial','I',9);
	//nomor halaman
	$pdf->Cell(0,-5,'Halaman '.$pdf->PageNo().'',0,0,'R');

$pdf->Output();
?>