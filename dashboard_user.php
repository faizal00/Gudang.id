<?php include "session.php"; ?>

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
  <!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

</head>
<style>
   .alert {
  padding: 20px;
  background-color: red; /* Red */
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
            <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "bukan_admin"){
			echo "<div class='alert'>
                <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>
                Anda Bukan Admin !
              </div>";
		}
	}
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
                <a href="./dashboard_user.php" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview menu-open">
                <a href="./tambah_user.php" class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>
                    Tambah Barang
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview menu-open">
                <a href="./detail_user.php" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Detail Barang
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
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">STATISTIK</h3>
                </div>
              </div>
                <?php 
                include 'config.php';
                ?>
              
              <div class="position-relative mb-4">
                  <canvas id="myChart" height="120px"></canvas>
                </div>
<!-- 
                <div class="d-flex flex-row justify-content-center">
                  <span class="mr-2">
                    <i class="fas fa-square" style="color: #1D92BF;"></i> Stock
                  </span>

                  <span>
                    <i class="fas fa-square" style="color: #76E376;"></i> Terjual
                  </span>
                </div> -->
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
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: ["Ready", "Sold"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_ready = mysqli_query($db,"select * from Barang where Stat='Ready'");
					echo mysqli_num_rows($jumlah_ready);
					?>, 
					<?php 
					$jumlah_sold = mysqli_query($db,"select * from Barang where Stat='Sold'");
					echo mysqli_num_rows($jumlah_sold);
					?>
					],
					backgroundColor: [
					'#1D92BF',
					'#76E376'
					],
					borderColor: [
					'#1D92BF)',
					'#76E376'
					],
					borderWidth: 1
				}]
			},
			// options: {
			// 	scales: {
			// 		yAxes: [{
			// 			ticks: {
			// 				beginAtZero:true
			// 			}
			// 		}]
			// 	}
			// }
		});
	</script>
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
