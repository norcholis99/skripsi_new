<?php
include '03_koneksi.php';
if ($_POST['getId']) {
	# code...
	$no=$_POST['getId'];
	$sql=mysqli_query($kon, "select * from lhs where hasil='$no'");	

  while ($xx=mysqli_fetch_array($sql)) {
    echo json_encode($xx);
  }

}
	
		?>	
