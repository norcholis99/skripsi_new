<?php 
include '03_koneksi.php';

$id=$_GET['id'];
$delete=mysqli_query($kon,"delete from piutang where no_faktur='$id'");
$delete2=mysqli_query($kon,"delete from piutang2 where no_faktur='$id'");




if ($delete) {
	# code...
	header("location:pt_piutang.php");
}
$query3=mysqli_query($kon,"insert into cod values ('$no','$tanggal','$tanggal2','$aa','$dd','$rr') ");
?>