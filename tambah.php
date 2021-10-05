<?php
 include "session.php";
 include "session_admin.php"
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
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
</head>
<style>
   .alert {
  padding: 20px;
  background-color: green; /* Red */
  color: white;
  margin-bottom: 15px;
  opacity: 1;
  transition: opacity 0.6s; /* 600ms to fade out */
}
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
  color: black;
}
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php include "navbar.php"; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php 
    if (isset($_SESSION['Id'])){
      $id = $_SESSION['Id'];
    } else ('Location:index.php');
  ?>
  <aside class="main-sidebar sidebar-light-primary elevation-4">
  <?php 
			$data = mysqli_query($db,"select * from User where id=$id");
			while($d = mysqli_fetch_array($data)){
				?>
					<img src="img/<?php echo $d['Image'] ?>"style="width:150px;height:150px;margin-top: 5%;margin-bottom: 5%;margin-left: 20%;border-radius:50%;">
				<?php
			}
 
			?>  	<h4 style="text-align:center;"> <?php echo $_SESSION['User']; ?></h4>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview menu-open">
                <a href="./dashboard.php" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview menu-open">
                <a href="./tambah.php" class="nav-link active">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>
                    Tambah Barang
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview menu-open">
                <a href="./kirim.php" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Edit Stock
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview menu-open">
                <a href="./hapus.php" class="nav-link">
                  <i class="nav-icon fas fa-trash"></i>
                  <p>
                    Hapus Barang
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview menu-open">
                <a href="./detail.php" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Detail Barang
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview menu-open">
                <a href="./hapus-akun.php" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Kelola Akun
                  </p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container">
          <div class="col-md-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                <div class="col col-md-12">
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="margin-bottom: 3%;">
                       <!-- left column -->
          <div class="col-md-12">
          <?php 
                if(isset($_GET['pesan'])){
                  if($_GET['pesan'] == "tambah"){
                    echo "<div class='alert'>
                              <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>
                              Berhasil Tambah Barang !
                            </div>";
                  }
                }
            ?>
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form action="proses-daftar.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="nam" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label>Jumlah</label>
                    <input type="number" name="jum" class="form-control" id="exampleInputEmail1" placeholder="Enter Value">
                  </div>
                  <div class="form-group">
                    <label>Kode</label>
                    <?php include 'config.php';
                      
                      $query = mysqli_query($db, "SELECT max(Kode) as KodeTerbesar FROM Barang");
                      $data = mysqli_fetch_array($query);
                      $kodeBarang = $data['KodeTerbesar'];
                        
                      $urutan = (int) substr($kodeBarang, 3, 3);
                        
                      $urutan++;

                      $huruf = "BRG";
                      $kodeBarang = $huruf . sprintf("%03s", $urutan);
                     
                    echo "<input readonly type='text' name='kod' class='form-control' id='exampleInputEmail1' value='$kodeBarang'>"
                    ?>
                    </div>
                  <div style="display:none;" class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="sta">
                      <option value="Ready">Ready</option>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->
              <?php  
                    
                  ?>
                <div class="card-footer">
                  <button type="submit" name="masukan" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
                  </div>
                  </div>
                </div>
              </div>
              </div>
              <!-- /.card-body -->
            </div>
             </div>
        </div>
    </section>
         
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script>
// Get all elements with class="closebtn"
var close = document.getElementsByClassName("closebtn");
var i;

// Loop through all close buttons
for (i = 0; i < close.length; i++) {
  // When someone clicks on a close button
  close[i].onclick = function(){

    // Get the parent of <span class="closebtn"> (<div class="alert">)
    var div = this.parentElement;

    // Set the opacity of div to 0 (transparent)
    div.style.opacity = "0";

    // Hide the div after 600ms (the same amount of milliseconds it takes to fade out)
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>
<!-- jQuery -->
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
<script src="dist/js/pages/dashboard3.js"></script>
</body>
</html>
