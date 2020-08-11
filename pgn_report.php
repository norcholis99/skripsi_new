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

$pdf->Cell(48,7,'Laporan Data Pelanggan',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,'No',1,0,'C');
$pdf->Cell(30,6,'NPWP',1,0,'C');
$pdf->Cell(50,6,'Nama Pelanggan',1,0,'C');
$pdf->Cell(40,6,'Alamat',1,0,'C');
$pdf->Cell(30,6,'No Telpon',1,0,'C');
$pdf->Cell(30,6,'Kategori',1,1,'C');

$pdf->SetFont('Arial','',10);

include '03_koneksi.php';
$pelanggan = mysqli_query($kon, "select * from pelanggan order by no asc");
while ($row = mysqli_fetch_array($pelanggan)){
    $pdf->Cell(10,6,$row['no'],1,0,'C');
    $pdf->Cell(30,6,$row['npwp'],1,0);
    $pdf->Cell(50,6,$row['nama_pelanggan'],1,0);
    $pdf->Cell(40,6,$row['alamat'],1,0);
    $pdf->Cell(30,6,$row['no_telpon'],1,0); 
    $pdf->Cell(30,6,$row['kategori'],1,1,'C'); 
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