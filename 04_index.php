<?php
include "03_koneksi.php";
include 'suport.php';

// session_start();

// // if (!isset($_SESSION["email"])) {
// //   echo "Anda harus login dulu <br><a href='01_login.php'>Klik disini</a>";
// //   exit;
// // }

// $level=$_SESSION["level"];

// if ($level!=1) {
//     echo "Anda tidak punya akses pada halaman admin";
//     exit;
// }

$username=$_SESSION["username"];
$nama=$_SESSION["email"];

$barangkeluar=mysqli_query($kon,"select count(*) as total from barang_keluar");
$barangkeluar2=mysqli_fetch_array($barangkeluar);

$query=mysqli_query($kon,"select sum(jumlah_tagihan) as jumlah_tagihan from piutang");
$hasil=mysqli_fetch_array($query);
$total=$hasil['jumlah_tagihan'];

$query2=mysqli_query($kon,"select sum(jumlah_tagihan) as jumlah_tagihan from cod");
$hasil2=mysqli_fetch_array($query2);
$total2=$hasil2['jumlah_tagihan'];

$query3=mysqli_query($kon,"select sum(total_1) as total_1 from retur");
$hasil3=mysqli_fetch_array($query3);
$total3=$hasil3['total_1'];

// $login=mysqli_query($kon,"select * from login");
// $login2=mysqli_fetch_array($login);


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE | Nurkholis ADM</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    html{
      font-family: "lucida sans", sans-serif;
      font-size: 12px;
    }
  </style>

  <link rel="stylesheet" type="text/javascript" href="tgl.php">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <b><?php include 'tgl.php'; ?></b>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <img src="mmp.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b>ADMIN</b></span>
    </a>

    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-header">INVENTORY</li>
          
          <li class="nav-item">
            <a href="bm_barang_masuk.php" class="nav-link">
              <i class="nav-icon fas fa-file text-info"></i>
              <p>
                Barang Masuk
                <span class=""></span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="bk_barang_keluar.php" class="nav-link">
              <i class="nav-icon fas fa-copy text-info"></i>
              <p>
                Barang Keluar
                <i class=""></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
           
          </li>
          <li class="nav-item has-treeview">
            <a href="sb_stok_barang.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie text-info"></i>
              <p>
                Stok Barang
                <span class="right badge badge-danger">Up</span>
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="pgn_pelanggan.php" class="nav-link">
              <i class="nav-icon fas fa-heart text-info"></i>
              <p>
                Pelanggan
                <i class=""></i>
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit text-info"></i>
              <p>
                Form
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="mo_movement_on.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Movement On</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pl_pembelian_lokal.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Pembelian Lokal</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-header">PROFIT & LOSS</li>

          <li class="nav-item">
            <a href="pt_piutang.php" class="nav-link">
              <i class="nav-icon far fa-envelope text-warning"></i>
              <p>
                Piutang
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="cod.php" class="nav-link">
              <i class="nav-icon far fa-envelope text-warning"></i>
              <p>
                Cash
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="rt_retur.php" class="nav-link">
              <i class="nav-icon far fa-envelope text-warning"></i>
              <p>
                Retur
                <i class="right badge badge-danger"></i>
              </p>
            </a>  
          </li>

          <li class="nav-header">REPORT</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th text-success"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="bm_report.php?tanggal1" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Laporan Data Barang Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="bk_report.php?tanggal1" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Laporan Data Barang Keluar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="sb_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Laporan Data Stok Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pgn_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Laporan Data Pelanggan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mo_report.php?tanggal1" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Laporan Data MO</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pl_report.php?tanggal1" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Laporan Data PL</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pt_report.php?tanggal1" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Laporan Data Piutang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="cod_report.php?tanggal1" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Laporan Data Kas Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="rt_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Laporan Data Retur</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Serba-serbi</li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Log Out</p>
            </a>
          </li>

        </ul>
      </nav>
    </div>
  </aside>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-9">
            <marquee><h4 class="m-0 text-dark">Selamat Datang di ERP System PT. MEGAH MEDIKA PHARMA</h4></marquee>
            <p><i><b>Silahkan pilih menu yang ada disamping kiri Anda</b></i></p>
          </div>
            <div class="col-sm-3">
              <ol class="breadcrumb float-sm-left">
                <li>
                  <b><!-- --------------------HALAMAN ADMIN--------------------- --></b>
                  </li>
              </ol>
            </div>
        </div>
      </div>
    </div>
    

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info" style="background: -webkit-linear-gradient(right, #00ffff, #00008b);">
              <div class="inner">
                <h3><?php echo $barangkeluar2["total"]; ?></h3>

                <p>Faktur*</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success" style="background: -webkit-linear-gradient(right, #adff2f, #008000);">
              <div class="inner">
                <h3><?php echo "Rp ".(number_format($total,0,',','.')); ?></h3>

                <p>Piutang*</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning" style="background: -webkit-linear-gradient(right, #fffacd, #ffff00);">
              <div class="inner">
                <h3><?php echo "Rp ".(number_format($total2,0,',','.')); ?></h3>

                <p>Cash*</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger" style="background: -webkit-linear-gradient(right, #ffc0cb, #ff0000);">
              <div class="inner">
                <h3><?php echo "Rp ".(number_format($total3,0,',','.')); ?></h3>

                <p>Retur*</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- <IfModule mod_rewrite.c>
          RewriteEngine on
          RewriteCond %{04_index.php} !-d
          RewriteCond %{04_index.php}.php -f
          RewriteRule ^(.*)$ $1.php
          </IfModule> -->

          <section class="col-lg-9 connectedSortable">

            <h6><i>
              <!-- * Selamat datang <b><?php echo $login2 ["username"];?></b>, Anda berhasil login * -->
              * Selamat datang <b><?php echo $_SESSION["username"];?></b>, Anda berhasil login *
            </i></h6><br>
            <h4 style="text-align: center;"><b>PT.MEGAH MEDIKA PHARMA</b></h4>
            <p style="text-align: center;"><i>Inspiring You In Healtcare Product</i></p>
            <p><b>VISI</b></p>
            <p>Sebagai distributor terpercaya dibidang alat-alat kesehatan bermutu tinggi yang terdaftar di kementrian kesehatan RI, untuk memenuhi kebutuhan rumah sakit pemerintah, rumah sakit swasta, dinas kesehatan dan instansi-instansi kesehatan di indonesia</p>
            <p><b>MISI</b></p>
            <p>-Meningkatkan mutu produk yang berkesinambungan <i>(in touch with innovative products).</i></p>
            <p>-Mempunyai jaringan distribusi diseluruh indonesia dengan pelayanan prima <i>(committed to serve better).</i></p>
            <p>-Menciptakan manajerial yang kreatif dan sumbr daya manusia yang berkualitas <i>(smart management).</i></p>
           
          </section>

          <section class="col-lg-3 connectedSortable">
            
            <script type="Text/Javascript">
var months = new Array();
months[0] = "Januari";
months[1] = "Peburari";
months[2] = "Maret";
months[3] = "April";
months[4] = "Mei";
months[5] = "Juni";
months[6] = "Juli";
months[7] = "Agustus";
months[8] = "September";
months[9] = "Oktober";
months[10] = "Nopember";
months[11] = "Desember";

var currentDate = new Date();
var currentMonth = currentDate.getMonth();
var hariini=currentDate.getDate();
currentDate.setDate(1);
document.write("<table align='center' border=1 cellpadding=3 cellspacing=0>");
document.write("<tr>");
document.write("<td colspan=7 align='center'bgcolor=00bfff><strong>"+ months[currentMonth] +"</strong></td>");
document.write("</tr>")
document.write("<tr bgcolor='#c0c0c0'>");
document.write("<td align='center'><font color=red>Ahad</td>");
document.write("<td align='center'>Senin</td>");
document.write("<td align='center'>Selasa</td>");
document.write("<td align='center'>Rabu</td>");
document.write("<td align='center'>Kamis</td>");
document.write("<td align='center'>Jum'at</td>");
document.write("<td align='center'>Sabtu</td>");
document.write("</tr>");

if (currentDate.getDay() != 0)
{
document.write("<tr>");
for (i = 0; i < currentDate.getDay(); i++)
{
document.write("<td>&nbsp;</td>");
}
}

while (currentDate.getMonth() == currentMonth)
{
if (currentDate.getDay == 0)
{
document.write("<tr>");
}

if (hariini==currentDate.getDate())
{
document.write("<td align='center' bgcolor='#00FF00'> <font color='#0000FF'><strong>" + currentDate.getDate() + "</strong></font></td>");
}

else
{
document.write("<td align='center'>" + currentDate.getDate() + "</td>");
}

if (currentDate.getDay() == 6)
{
document.write("</tr>");
}
currentDate.setDate(currentDate.getDate() + 1);
}

for (i = currentDate.getDay(); i <= 6; i++)
{
document.write("<td>&nbsp;</td>");
}

document.write("</table>");
</script>

          </section>
        </div>
      </div>
    </section>
  </div>
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="#">AdminLTE.io & Norcholis</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

</body>
</html>