<!doctype html>
<html lang="en">

<head>
	<title>Halaman Detail</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- CSS -->
	<link rel="stylesheet" href="assets2/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets2/css/vendor/icon-sets.css">
	<link rel="stylesheet" href="assets2/css/main.min.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets2/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets2/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets2/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- SIDEBAR -->
<div class="sidebar">
			<div class="brand">
				<a href="index.html"><img src="assets2/img/logo.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.php" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="view_transaksi.php" class=""><i class="lnr lnr-code"></i> <span>Transaksi</span></a></li>
						
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
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets2/img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
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
					<h3 class="page-title">Daftar Transaksi</h3>
					<?php 
				//	error_reporting(0); // tutup pesan error pada request act
					
				//	if(empty($_SESSION['id_admin'])){ // jika session dari id admin kosong (belum login)
					//	echo "<script>window.location.href='login.php';</script>"; (diarahkan ke halaman login.php (halaman login)

					//}
					
					
					if($_REQUEST['act'] == "success_verified"){ // kalau ternyata berhasil diverifikasi
					echo "<div class='alert alert-success'> //muncul pesan alert selesai diverifikasi
  <strong>Success!</strong> Transaksi sudah diverifikasi
</div>";
					} 
					?>
					<div class="row">
						
						
						<div class="col-md-12">
						
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title"></h3>
								</div>
								
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
							
											<tr>
												<th>No</th>
												<th>Id Transaksi</th>
												<th>Nama member</th>
												<th>Nama lapangan</th>
												<th>Durasi</th>
												<th>Status</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
										
										<?php
											include "connection.php"; //untuk koneksi ke database
											$no = 0; //set  variabel $no dengan nilai 0 untuk buat penomoran pada table
											$a = mysqli_query($conn, "SELECT * FROM transaksi, member, lapangan, penyedia_futsal WHERE penyedia_futsal.id_penyedia_futsal= transaksi.id_penyedia_futsal and lapangan.id_lapangan = transaksi.id_lapangan and transaksi.id_member= 'M002' order by transaksi.id_transaksi"); //perintah sql untuk view data transaksi
while($b = mysqli_fetch_array($a)){ //memilah data berdasarkan field
$no++; //melakukan penomoran
										?>
										<tr>
											
												<td><?php echo $no; // meletakan hasil penomoran?></td> 
												<td><?php echo $b['id_transaksi']; //menampilkan data dari field id_transaksi ?></td>
												<td><?php echo $b['nama_penyedia'];//menampilkan data dari field nama_member ?></td>
												<td><?php echo $b['nama_lapangan']; // menampilkan data dari field nama_lapangan?></td>
												<td><?php echo $b['durasi']; // menampilkan data dari field durasi?></td>
												<td><?php echo $b['status']; // menampilkan data dari field status?></td>
												<td><button type="button" class="btn btn-info" onclick="window.location.href='view_detail_transaksi.php?id=<?php echo $b['id_penyedia_futsal']; ?>'; ">upload Bukti Transaksi</button></td>
												
											</tr>
											
											<?php
							}
									?>
											

									</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
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
	<script src="assets2/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="assets2/js/bootstrap/bootstrap.min.js"></script>
	<script src="assets2/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets2/js/klorofil.min.js"></script>
</body>

</html>
