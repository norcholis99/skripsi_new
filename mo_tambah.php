<?php 
include '03_koneksi.php';

$ni=$_POST['no8'];
$no=$_POST['no1'];
$jj=$_POST['no2'];
$tanggal=date("Y-m-d", strtotime($jj));
$mm=$_POST['no3'];
$aa=$_POST['no4'];
$dd=$_POST['no5'];
$rr=$_POST['no6'];
$qq=$_POST['no7'];

$query=mysqli_query($kon,"insert into movement_on values ('$ni','$no','$tanggal','$mm','$aa','$dd','$rr','$qq') ");

if ($query) {
	echo "<script>alert('Data berhasil ditambahkan ke database !');document.location='mo_movement_on.php'</script>";


} else {
	header("location:error.php");
}

 ?>
