<?php 
include '03_koneksi.php';

$id=$_GET['id'];
$delete=mysqli_query($kon,"delete from sales where user='$id'");
$delete2=mysqli_query($kon,"delete from lhs where user='$id'");
if ($delete) {
	# code...
	header("location:sales.php");
}
 ?>