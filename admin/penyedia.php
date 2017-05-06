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
						<li><a href="view_penyedia.php" ><i class="lnr lnr-code"></i> <span>Penyedia Futsal</span></a></li>
						<li><a href="view_member.php" class=""><i class="lnr lnr-users"></i> <span>Member</span></a></li>
						<li><a href="view_transaksi.php" class=""><i class="fa fa-credit-card"></i> <span>Transaksi Penyedia Futsal</span></a></li>
							<li><a href="view_admin.php" class="active"><i class="lnr lnr-users"></i> <span>Admin</span></a></li>
						
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
					<h3 class="page-title">Penyedia Futsal</h3>
					<?php 
					error_reporting(0);
					session_start();
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
								<form method="post" action="penyedia.php?act=tambah" enctype="multipart/form-data">
								 <div class="form-group">
    <label for="text">Nama Penyedia</label>
    
    <input type="text" name="nama_penyedia" class="form-control" >
  </div>
  
  
   <div class="form-group">
    <label for="text">Nama Pemilik</label>
    <input type="text" name="nama_pemilik"  class="form-control" >
  </div>
  <div class="form-group">
  <label for="comment">Alamat</label>
  <textarea class="form-control" name="alamat"  rows="5" ></textarea>
</div>
<div class="form-group">
  <label for="sel1">Jumlah Lapangan</label>
  <select class="form-control" name="jumlah_lapangan" >
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
</div>


 <div class="form-group">
  <label for="comment">Deskripsi tempat futsal</label>
  <textarea class="form-control" rows="5" name="deskripsi"  ></textarea>
</div>
   <div class="form-group">
  <label for="comment">Fasilitas tempat futsal</label>
  <textarea class="form-control" rows="5" name="fasilitas" ></textarea>
</div>
  
 <div class="form-group">
  <label for="text">Username</label>
   <input type="text" class="form-control" name="username"  >
</div>

<div class="form-group">
  <label for="password">Password</label>
   <input type="password" class="form-control" name="password" >
</div>



 <div class="form-group">
    <label for="exampleInputFile">upload foto</label>
    <input type="file"  class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="gambar">
    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
  </div>
								<button type="submit" class="btn btn-primary">Submit </button>
								
																
																			
</form>
</br>

	<button onclick="window.location.href='view.penyedia.php';" class="btn ">kembali </button>  
<?php
include "connection.php";
if( $_REQUEST['act'] == 'tambah'){
$a = mysqli_query($conn, "select count(id_penyedia_futsal) from penyedia_futsal");
$b = mysqli_fetch_array($a);
$c = $b['count(id_penyedia_futsal)'] + 1 ;
$d  = "'PN000". $c."'";

$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
// Set path folder tempat menyimpan gambarnya
$path = "images/".$nama_file;
$path1 = "'".$path."'";
    move_uploaded_file($tmp_file, $path);
	
	$nama_penyedia = "'".$_POST['nama_penyedia']."'";
	$nama_pemilik = "'".$_POST['nama_pemilik']."'";
	$alamat =  "'".$_POST['alamat']."'";
	$jumlah_lapangan ="'".$_POST['jumlah_lapangan']."'";
	$deskripsi = "'".$_POST['deskripsi']."'";
	$fasilitas = "'".$_POST['fasilitas']."'";
	$username = "'".$_POST['username']."'";
	$password = md5($_POST['password']);
	$pass = "'".$password."'";

$sql = "INSERT INTO penyedia_futsal (id_penyedia_futsal, nama_penyedia, nama_pemilik, alamat, jumlah_lapangan, deskripsi, fasilitas, username, password, upload_foto)VALUES ($d, $nama_penyedia, $nama_pemilik, $alamat, $jumlah_lapangan, $deskripsi, $fasilitas, $username, $pass, $path1 )";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	echo "<script>window.location.href='penyedia.php?act=success_tambah'; </script>";

	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

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
