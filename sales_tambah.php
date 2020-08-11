<?php 
include '03_koneksi.php';

$no=$_POST['no2'];
$tanggal=date("Y-m-d", strtotime($no));
$jj=$_POST['no3'];
$mm=$_POST['no4'];
$aa=$_POST['no5'];
$dd=$_POST['no6'];
$ee=$_POST['no7'];


$query=mysqli_query($kon,"insert into sales values ('$no','$jj','$mm','$aa','$dd', '$ee') ");
$query2=mysqli_query($kon,"insert into lhs values ('$no','$jj','$mm','$aa','$dd', '$ee') ");
if ($query) {
	echo "<script>alert('Data berhasil ditambahkan ke database !');document.location='sales.php'</script>";


} else {
	echo "error";
}

 ?>
