<?php 
include '03_koneksi.php';


$ni=$_POST['id1'];
$tanggal=date("Y-m-d", strtotime($ni));
$no=$_POST['id2'];
$jj=$_POST['id3'];
$mm=$_POST['id4'];
$aa=$_POST['id5'];
$dd=$_POST['id6'];

$query=mysqli_query($kon,"update lhs set tanggal='$ni', rumahsakit='$no', ruangan='$jj', user='$mm', respon='$dd' where hasil='$aa'");
$query2=mysqli_query($kon,"update sales set tanggal='$ni', rumahsakit='$no', ruangan='$jj', user='$mm', respon='$dd' where hasil='$aa'");

if ($query) {
	header("location:lhs.php");

} else {
	echo "error";
}

 ?>
