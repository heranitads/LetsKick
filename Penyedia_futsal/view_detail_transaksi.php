<!doctype html>
<html lang="en">

<head>
	<title>Dashboard Admin</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/vendor/icon-sets.css">
	<link rel="stylesheet" href="assets/css/main.min.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- SIDEBAR -->
	<div class="sidebar">
			<div class="brand">
				<a href="index.html"><img src="assets/img/logo.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
				<li><a href="index.php" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="view_lapangan.php" class=""><i class="lnr lnr-code"></i> <span>Lapangan</span></a></li>
						<li><a href="view_transaksi.php" class="active"><i class="fa fa-money"></i> <span>Transaksi</span></a></li>
								
					</ul>
				</nav>
			</div>
			
		</div>
	
		<!-- END SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- NAVBAR -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-btn">
						<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
					</div>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
							<span class="sr-only">Toggle Navigation</span>
							<i class="fa fa-bars icon-nav"></i>
						</button>
					</div>
					<div id="navbar-menu" class="navbar-collapse collapse">
						<form class="navbar-form navbar-left hidden-xs">
							<div class="input-group">
								<input type="text" value="" class="form-control" placeholder="Search dashboard...">
								<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
							</div>
						</form>
						<ul class="nav navbar-nav navbar-right">
							

						<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
									<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
									<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
									<li><a href="logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		

		<!-- END NAVBAR -->
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Detail Transaksi</h3>
					<?php 
					error_reporting(0);
					
					if(empty($_SESSION['id_admin'])){
						echo "<script>window.location.href='login.php';</script>";

					}
					
					if($_REQUEST['act'] == "success_tambah"){
					echo "<div class='alert alert-success'>
  <strong>Success!</strong> data berhasil ditambah
</div>";
					}
					?>
					
					<div class="row">
						<div class="col-md-12">
							<!-- BUTTONS -->
						
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title"></h3>
								</div>
								<div class="panel-body">
								<?php
											include "connection.php"; //untuk koneksi ke database
											$no = 0; //set  variabel $no dengan nilai 0 untuk buat penomoran pada table
											$a = mysqli_query($conn, "SELECT * FROM transaksi, member, lapangan WHERE member.idmember= transaksi.id_member and lapangan.id_lapangan = transaksi.id_lapangan order by transaksi.id_transaksi"); //perintah sql untuk view data transaksi
$b = mysqli_fetch_array($a);//memilah data berdasarkan field

										?>
										
										 <div class="form-group">
								 	
    <label for="text">Id Transaksi  :  <?php echo $b['id_transaksi'];//menampilkan data dari field id_transaksi ?>  </label>
    
  
  </div>
									 <div class="form-group">
								 	
    <label for="text">Nama Member  :  <?php echo $b['nama_member'];//menampilkan data dari field nama_member ?>  </label>
    
  
  </div>
  
  
   <div class="form-group">
    <label for="text">Alamat :   <?php echo $b['alamat'];//menampilkan data dari field alamat ?>    </label>
    
  </div>
  
  <div class="form-group">
    <label for="text">Telepon :   <?php echo $b['no_hp'];//menampilkan data dari field no_hp ?>  </label>
    
  </div>
 
<div class="form-group">
  <label for="sel1">Nama Lapangan :  <?php echo $b['nama_lapangan'];//menampilkan data dari field nama lapangan ?> </label>
 
</div>


 <div class="form-group">
  <label for="comment">Durasi Bermain : <?php echo $b['durasi'];//menampilkan data dari field durasi ?></label>
 
</div>
   <div class="form-group">
  <label for="comment">Waktu Bermain : <?php echo $b['waktu'];//menampilkan data dari field durasi ?></label>
  
</div>
  
 <div class="form-group">
  <label for="text">Biaya :  <?php echo $b['biaya'];//menampilkan data dari field biaya ?></label>
  
</div>

<div class="form-group">
  <label for="password">Status : <?php echo $b['status'];//menampilkan data dari field status ?></label>
   
</div>



 								<button type="button" class="btn btn-primary">Cetak Laporan  </button>
								
																
																			
</form>
</br>

	<button onclick="window.location.href='view_transaksi.php';" class="btn ">kembali </button>  

							</div>
							</div>
							<!-- END INPUT SIZING -->
						</div>
					
					
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
			<footer>
				<div class="container-fluid">
					<p class="copyright">&copy; 2016. Designed &amp; Crafted by <a href="https://themeineed.com">The Develovers</a></p>
				</div>
			</footer>
		</div>
		<!-- END MAIN -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/klorofil.min.js"></script>
</body>

</html>
