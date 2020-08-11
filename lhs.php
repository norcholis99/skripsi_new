<?php include 'suport.php';
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LHS</title>
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
      .header{
      background-color: #00bfff;
      color: #ffffff;
      padding: 14px;
      text-align: left;
      margin: 5px;
    }

    html{
      font-family: "lucida sans", sans-serif;
      font-size: 12px;
    }

    img.kiri {
      float: left;
      margin: 2px 3px 5px 5px;
    }

    .button {
      background-color:#4CAF50;
      border: none;
      color: white;
      padding: 3px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 12px;
      margin: 4px 2px;
      cursor: pointer;
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
        <a href="08_indexbm.php" class="nav-link">Home</a>
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
    <a href="08_indexbm.php" class="brand-link">
      <img src="mmp.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b>BRANCH MANAGER</b></span>
    </a>

    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-header">BREAK DOWN</li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy text-info"></i>
              <p>
                LHS
                <span class=""></span>
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
              <li class="nav-item">
                <a href="sales_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Laporan Data Kunjungan Sales</p>
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
    

    <section class="content">
     <div class="header">
      <img class="kiri" src="mmp.png" width="45px" height="45px" alt="logo mmp"> 
      <h4> &nbsp LHS<br> &nbsp PT. Megah Medika Pharma Cabang Banjarmasin</h4>
    </div>

    
     

    <form method="GET" action="lhs.php" style="float: left;">
      &nbsp&nbsp&nbsp<input placeholder=" Search" type="text" name="cari">
      <button type="submit" class="btn btn-navbar">
     <i class="fas fa-search"></i>   
      </button>
    </form>

  <div style="margin: 5px">
    <table class="table table-bordered">

      <?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari'];
    } ?>

    <tr bgcolor="ffff00">
      <th style="text-align: center;">Tanggal</th>
      <th style="text-align: center;">Rumah Sakit</th>
      <th style="text-align: center;">Ruangan</th>
      <th style="text-align: center;">User</th>
      <th style="text-align: center;">Hasil</th>
      <th style="text-align: center;">Comment BM</th>

      <th style="text-align: center;">Opsi</th>


    </tr>

  <tbody>
    <?php 
      include '03_koneksi.php';

      if(isset($_GET['cari'])){ $cari = $_GET['cari'];

      $sql=mysqli_query($kon,"select * from lhs where rumahsakit like '%".$cari."%' or ruangan like '%".$cari."%' or user like '%".$cari."%' order by tanggal asc ");
    } else {$sql = mysqli_query($kon,"select * from lhs order by tanggal asc");
      }
      while ($saa=mysqli_fetch_array($sql)) {

        # code...
       ?>
      <tr>
        <td style="text-align: center;"><?php echo $saa['tanggal']; ?></td>
        <td><?php echo $saa['rumahsakit']; ?></td>
        <td><?php echo $saa['ruangan']; ?></td>
        <td><?php echo $saa['user']; ?></td>
        <td><?php echo $saa['hasil']; ?></td>
        <td><?php echo $saa['respon']; ?></td>
        
        <td style="text-align: center;">
              
          <a class="edit.record" href="#" data-target="#md2" data-toggle="modal" data-id='<?php echo $saa ['hasil'] ; ?>'>
            <i class="nav-icon fas fa-key text-info"></i>
          </a>
          
         
        </td>
      </tr>

    <tr>

    
      <div class="modal fade" tabindex="-1" role="dialog" id="md2">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Edit LHS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>

          <div class="modal-body">
            <div class="modal-data">
             
      <form action="lhs_editaksi.php" method="post">
        <div class="container">

          <div class="form-group row mt-3">
            <label class="col-sm-4 col-sm-label">Tanggal</label>
            <div class="col-sm-8"><input type="date" name="id1" id="tanggal" class="form-control" required="" value="<?php echo $aa['tanggal'] ?>"></div>
          </div>

          <div class="form-group row mt-3">
            <label class="col-sm-4 col-sm-label">Rumah Sakit</label>
            <div class="col-sm-8"><input type="text" name="id2" id="rumahsakit" class="form-control" required="" value="<?php echo $aa['rumahsakit'] ?>"></div>
          </div>  

          <div class="form-group row mt-3">
            <label class="col-sm-4 col-sm-label">Ruangan</label>
            <div class="col-sm-8"><input type="text" name="id3" id="ruangan" class="form-control" required="" value="<?php echo $aa['ruangan'] ?>"></div>
          </div>

          <div class="form-group row mt-3">
            <label class="col-sm-4 col-sm-label">User</label>
            <div class="col-sm-8"><input type="text" name="id4" id="user" class="form-control" required="" value="<?php echo $aa['user'] ?>"></div>
          </div>

          <div class="form-group row mt-3">
            <label class="col-sm-4 col-sm-label">Hasil</label>
            <div class="col-sm-8"><input type="text" name="id5" id="hasil" class="form-control" required="" value="<?php echo $aa['hasil'] ?>"></div>
          </div>

          <div class="form-group row mt-3">
            <label class="col-sm-4 col-sm-label">Comment BM</label>
            <div class="col-sm-8"><input type="text" name="id6" id="respon" class="form-control" value="<?php echo $aa['respon'] ?>"></div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary" name="submit">Simpan Perubahan</button>
          </div>

      </form>
     </div>
            </div>
          </div>
      
            </div>
        </div>
      </div>
    </div>
  </tr>
  
    </tbody>
      <?php 
    } 
    ?>
  </table>
</div>

  
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>

<script>
  $(document).ready(function(){
    $('#md2').on('show.bs.modal', function(e) {
      var getId= $(e.relatedTarget).data('id');
      $.ajax({
        type : 'POST',
        url : 'lhs_edit.php',
        data : 'getId='+getId,
        dataType:"json",

        success:function(data){
          $('#tanggal').val(data.tanggal);
          $('#rumahsakit').val(data.rumahsakit);
          $('#ruangan').val(data.ruangan);
          $('#user').val(data.user);
          $('#hasil').val(data.hasil);
          $('#respon').val(data.respon);

        }

      });
    });
  });
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