<?php include 'suport.php';
 ?>

<?php
// memanggil library FPDF
require('fpdf.php');

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P','mm','A4');

// membuat halaman baru
$pdf->AddPage();

$pdf->image('mmp.png',35,11,13,13);

// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,5,'PT. MEGAH MEDIKA PHARMA Cabang Banjarmasin',0,1,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell(190,5,'Jl. Gubernur Soebarjo Km 18 Komplek Pergudangan Bizpark',0,1,'C');
$pdf->Cell(190,5,'Gambut - Kalimantan Selatan Telp. (0511 123 8890)',0,1,'C');

//buat garis horisontal
$pdf->Line(10,28,200,28);
$pdf->Line(10,28,200,28);   

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
$pdf->SetX(6);
$pdf->MultiCell(95,10,'Laporan Data Pembelian Lokal Periode Bulan '.$bln_list[date('m')].' '.date('Y'),0,'C');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(12,6,'No',1,0,'C');
$pdf->Cell(18,6,'No PL',1,0,'C');
$pdf->Cell(25,6,'Tanggal',1,0,'C');
$pdf->Cell(15,6,'Kode',1,0,'C');
$pdf->Cell(40,6,'Nama Barang',1,0,'C');
$pdf->Cell(20,6,'Jumlah',1,0,'C');
$pdf->Cell(20,6,'Satuan',1,0,'C');
$pdf->Cell(40,6,'Penyedia',1,1,'C');

$pdf->SetFont('Arial','',10);

include '03_koneksi.php';
if ($_GET['tanggal1']) {

    $tgl=$_GET['tanggal1'];
    $tgl2=$_GET['tanggal2'];
$pembelian_lokal_2 = mysqli_query($kon, "select * from pembelian_lokal where tanggal between '$tgl' and '$tgl2'");
while ($row = mysqli_fetch_array($pembelian_lokal_2)){
    $pdf->Cell(12,6,$row['no'],1,0);
    $pdf->Cell(18,6,$row['no_pl'],1,0,'C');
    $pdf->Cell(25,6,$row['tanggal'],1,0,'C');
    $pdf->Cell(15,6,$row['kode_barang'],1,0);
    $pdf->Cell(40,6,$row['nama_barang'],1,0); 
    $pdf->Cell(20,6,$row['jumlah'],1,0,'R'); 
    $pdf->Cell(20,6,$row['satuan'],1,0,'C'); 
    $pdf->Cell(40,6,$row['penyedia'],1,1); 
}

} else {

$pembelian_lokal = mysqli_query($kon, "select * from pembelian_lokal order by no asc");
while ($row = mysqli_fetch_array($pembelian_lokal)){
    $pdf->Cell(12,6,$row['no'],1,0);
    $pdf->Cell(18,6,$row['no_pl'],1,0,'C');
    $pdf->Cell(25,6,$row['tanggal'],1,0,'C');
    $pdf->Cell(15,6,$row['kode_barang'],1,0);
    $pdf->Cell(40,6,$row['nama_barang'],1,0); 
    $pdf->Cell(20,6,$row['jumlah'],1,0,'R'); 
    $pdf->Cell(20,6,$row['satuan'],1,0,'C'); 
    $pdf->Cell(40,6,$row['penyedia'],1,1); 
}
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
$pdf->MultiCell(95,10,'Banjarmasin, '.date('d').' '.$bln_list[date('m')].' '.date('Y'),0,'C');
$pdf->SetX(120);
$pdf->MultiCell(95,0, 'Admin Sales',0,'C');
$pdf->SetX(120);
$pdf->MultiCell(95,20, ' ',0,'C');
$pdf->SetX(120);
$pdf->MultiCell(95,1, 'Hubul Wattan',0,'C');
$pdf->SetX(120);
$pdf->MultiCell(95,1, '_______________',0,'C');
$pdf->SetX(120);
$pdf->MultiCell(95,8, 'NIK : 2018020418',0,'C');
$pdf->Ln();

	//atur posisi 1.5 cm dari bawah
	$pdf->SetY(-20);
	//buat garis horizontal
	$pdf->Line(10,$pdf->GetY(),200,$pdf->GetY());
	//Arial italic 9
	$pdf->SetFont('Arial','I',9);
	//nomor halaman
	$pdf->Cell(0,-5,'Halaman '.$pdf->PageNo().'',0,0,'R');

$pdf->Output();
?>