<?php 
include '03_koneksi.php';


$ni=$_POST['id6'];
$no=$_POST['id1'];
$jj=$_POST['id2'];
$mm=$_POST['id3'];
$aa=$_POST['id4'];
$dd=$_POST['id5'];
$tanggal=date("Y-m-d", strtotime($dd));

$query=mysqli_query($kon,"update stok_barang set no='$ni', nama_barang='$jj', satuan='$mm', stok_akhir='$aa', tgl_expired='$dd' where kode_barang='$no' ");
$query2=mysqli_query($kon,"update stokbarang2 set no='$ni', nama_barang='$jj', satuan='$mm', stok_akhir='$aa', kadaluarsa='$dd' where kode_barang='$no' ");

if ($query) {
	echo "<script>alert('Data berhasil diedit !');document.location='sb_Stok_barang.php'</script>";


} else {
	header("location:error.php");
}

 ?>
