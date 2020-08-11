<?php 
include '03_koneksi.php';

$no=$_POST['id2'];
$tanggal=date("Y-m-d", strtotime($no));
$jj=$_POST['id3'];
$mm=$_POST['id4'];
$aa=$_POST['id5'];
$dd=$_POST['id6'];
$ee=$_POST['id7'];


$query=mysqli_query($kon,"update sales set tanggal='$no', rumahsakit='$jj', ruangan='$mm', hasil='$dd', respon='$ee' where user='$aa' ");
$query2=mysqli_query($kon,"update lhs set tanggal='$no', rumahsakit='$jj', ruangan='$mm', hasil='$dd', respon='$ee' where user='$aa' ");

if ($query) {
	header("location:sales.php");

} else {
	echo "error";
}

 ?>
