<?php 
include '03_koneksi.php';

$ni=$_POST['no6'];
$no=$_POST['no1'];
$jj=$_POST['no2'];
$mm=$_POST['no3'];
$aa=$_POST['no4'];
$dd=$_POST['no5'];

$query=mysqli_query($kon,"insert into pelanggan values ('$ni','$no','$jj','$mm','$aa','$dd') ");

if ($query) {
	echo "<script>alert('Data berhasil ditambahkan ke database !');document.location='pgn_pelanggan.php'</script>";


} else {
	header("location:error.php");
}

 ?>
