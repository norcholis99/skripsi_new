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
$pdf->SetX(4);
$pdf->MultiCell(95,10,'Laporan Data Barang Keluar Periode Bulan '.$bln_list[date('m')].' '.date('Y'),0,'C');

$pdf->SetFont('Arial','B',6);
$pdf->Cell(18,6,'No Faktur',1,0,'C');
$pdf->Cell(18,6,'Tgl Faktur',1,0,'C');
$pdf->Cell(20,6,'Tgl Jatuh Tempo',1,0,'C');
$pdf->Cell(25,6,'Nama Pelanggan',1,0,'C');
$pdf->Cell(28,6,'Alamat',1,0,'C');
$pdf->Cell(20,6,'Kode Barang',1,0,'C');
$pdf->Cell(30,6,'Nama Barang',1,0,'C');
$pdf->Cell(15,6,'Quantity',1,0,'C');
$pdf->Cell(20,6,'Satuan',1,0,'C');
$pdf->Cell(15,6,'Harga',1,0,'C');
$pdf->Cell(18,6,'Total Sementara',1,0,'C');
$pdf->Cell(15,6,'PPN',1,0,'C');
$pdf->Cell(15,6,'Ongkir',1,0,'C');
$pdf->Cell(18,6,'Total Bayar',1,1,'C');

$pdf->SetFont('Arial','',6);

include '03_koneksi.php';
if ($_GET['tanggal1']) {

    $tgl=$_GET['tanggal1'];
    $tgl2=$_GET['tanggal2'];
    # code...

     $barang_keluar_2 = mysqli_query($kon, "select * from barang_keluar where tgl_faktur between '$tgl' and '$tgl2' ");
while ($row = mysqli_fetch_array($barang_keluar_2)){
    $pdf->Cell(18,6,$row['no_faktur'],1,0,'C');
    $pdf->Cell(18,6,$row['tgl_faktur'],1,0,'C');
    $pdf->Cell(20,6,$row['tgl_jatuhtempo'],1,0,'C');
    $pdf->Cell(25,6,$row['nama_pelanggan'],1,0); 
    $pdf->Cell(28,6,$row['alamat'],1,0); 
    $pdf->Cell(20,6,$row['kode_barang'],1,0); 
    $pdf->Cell(30,6,$row['nama_barang'],1,0); 
    $pdf->Cell(15,6,$row['quantity'],1,0,'R'); 
    $pdf->Cell(20,6,$row['satuan'],1,0,'C'); 
    $pdf->Cell(15,6,$row['harga'],1,0,'R');
    $pdf->Cell(18,6,$row['total_1'],1,0,'R'); 
    $pdf->Cell(15,6,$row['ppn'],1,0,'R'); 
    $pdf->Cell(15,6,$row['ongkir'],1,0,'R'); 
    $pdf->Cell(18,6,$row['total_bayar'],1,1,'R'); 
   
}

} else {
    # code...
    $barang_keluar = mysqli_query($kon, "select * from barang_keluar order by no_faktur");
while ($row = mysqli_fetch_array($barang_keluar)){
    $pdf->Cell(18,6,$row['no_faktur'],1,0,'C');
    $pdf->Cell(18,6,$row['tgl_faktur'],1,0,'C');
    $pdf->Cell(20,6,$row['tgl_jatuhtempo'],1,0,'C');
    $pdf->Cell(25,6,$row['nama_pelanggan'],1,0); 
    $pdf->Cell(28,6,$row['alamat'],1,0); 
    $pdf->Cell(20,6,$row['kode_barang'],1,0); 
    $pdf->Cell(30,6,$row['nama_barang'],1,0); 
    $pdf->Cell(15,6,$row['quantity'],1,0,'R'); 
    $pdf->Cell(20,6,$row['satuan'],1,0,'C'); 
    $pdf->Cell(15,6,$row['harga'],1,0,'R');
    $pdf->Cell(18,6,$row['total_1'],1,0,'R'); 
    $pdf->Cell(15,6,$row['ppn'],1,0,'R'); 
    $pdf->Cell(15,6,$row['ongkir'],1,0,'R'); 
    $pdf->Cell(18,6,$row['total_bayar'],1,1,'R'); 
    

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
$pdf->MultiCell(240,10,'Banjarmasin, '.date('d').' '.$bln_list[date('m')].' '.date('Y'),0,'C');
$pdf->SetX(120);
$pdf->MultiCell(240,0, 'Branch Manager',0,'C');
$pdf->SetX(120);
$pdf->MultiCell(240,20, ' ',0,'C');
$pdf->SetX(120);
$pdf->MultiCell(240,1, 'Pa Adi Widodo',0,'C');
$pdf->SetX(120);
$pdf->MultiCell(240,1, '_______________',0,'C');
$pdf->SetX(120);
$pdf->MultiCell(240,8, 'NIK : 2017010110',0,'C');
$pdf->Ln();

	//atur posisi 1.5 cm dari bawah
    $pdf->SetY(-20);
    //buat garis horizontal
    $pdf->Line(10,$pdf->GetY(),286,$pdf->GetY());
    //Arial italic 9
    $pdf->SetFont('Arial','I',9);
    //nomor halaman
    $pdf->Cell(0,-5,'Halaman '.$pdf->PageNo().'',0,0,'R');

$pdf->Output();
?>