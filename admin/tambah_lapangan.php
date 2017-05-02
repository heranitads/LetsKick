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
					<h3 class="page-title">Tambah lapangan</h3>
					<?php 
				error_reporting(0);
					
					//if(empty($_SESSION['id_admin'])){
						//echo "<script>window.location.href='login.php';</script>";

					//}
					
					if($_REQUEST['act'] == "success_tambah"){ //jika aksi tambah dilakukan
					echo "<div class='alert alert-success'> //muncul pesan data berhasil ditambah
  <strong>Success!</strong> data berhasil ditambah <a href='view_lapangan.php'> Klik untuk kembali </a>
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
								<form method="post" action="tambah_lapangan.php?act=tambah" enctype="multipart/form-data">
								 <div class="form-group">
    <label for="text">Nama lapangan</label>
    
    <input type="text" name="nama_lapangan" class="form-control" >
  </div>
  
  
  


 <div class="form-group">
  <label for="comment">Deskripsi tempat futsal</label>
  <textarea class="form-control" rows="5" name="deskripsi"  ></textarea>
</div>
   <div class="form-group">
  <label for="comment">Fasilitas tempat futsal</label>
  <textarea class="form-control" rows="5" name="fasilitas" ></textarea>
</div>
								<button type="submit" class="btn btn-primary">Submit </button>
								
																
																			
</form>
</br>

	<button onclick="window.location.href='view_lapangan.php';" class="btn ">kembali </button>  
<?php
include "connection.php"; //koneksi ke database
if( $_REQUEST['act'] == 'tambah'){ //jika ada operasi submit
$a = mysqli_query($conn, "select count(id_lapangan) from lapangan"); // ambil jumlah id_lapangan didatabase tabel lapangan
$b = mysqli_fetch_array($a);// pilah data sesuai field
$c = $b['count(id_lapangan)'] + 1 ; /// nilai yang diambil ditambah 1 setiap operasi insert
$d  = "'PN000". $c."'"; // masukan nilai penambahan tersebut kedalam variabel $d sebagai id

	
	$nama_lapangan = "'".$_POST['nama_lapangan']."'"; // ambil nilai textbox nama lapangan dan masukan ke variabel $nama_lapangan
	$deskripsi = "'".$_POST['deskripsi']."'"; // ambil nilai textbox deskripsi dan masukan ke variabel $deskripsi
	$fasilitas =  "'".$_POST['fasilitas']."'";// ambil nilai textbox fasilitas dan masukan ke variabel $fasilitas


$sql = "INSERT INTO lapangan (id_lapangan, id_penyedia,  nama_lapangan, deskripsi, fasilitas)VALUES ($d, 'P001', $nama_lapangan, $deskripsi, $fasilitas )"; // operasi insert data

if (mysqli_query($conn, $sql)) { // jika berhasil insert
    echo "New record created successfully"; // pesan selesai ditambahkan
	echo "<script>window.location.href='tambah_lapangan.php?act=success_tambah'; </script>"; //mengarahkan ke tambah lapangan dengan operasi pesan

	
} else { //jika gagal 
    echo "Error: " . $sql . "<br>" . mysqli_error($conn); // muncul pesan error
}

mysqli_close($conn); // tutup koneksi ke database

}

?>

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
