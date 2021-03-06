<!doctype html>
<html lang="en">

<head>
	<title>Elements | Klorofil - Free Bootstrap Dashboard Template</title>
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
		-- SIDEBAR -->
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
		

			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Member</h3>
					<?php 
					error_reporting(0);
					
					
					if($_REQUEST['act'] == "success_tambah"){
					echo "<div class='alert alert-success'>
  <strong>Success!</strong> Data member berhasil dimasukan !
</div>";
					}
					
					
					?>
					<div class="row">
						<div class="col-md-12">
							<!-- BUTTONS -->
						
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Tambah Admin</h3>
								</div>
								<div class="panel-body">
								<form method="post" action="tambah_admin.php?act=tambah" enctype="multipart/form-data">
								
								 <div class="form-group">
    <label for="text">Nama Admin</label>
    <input type="text" class="form-control" name ="nama_admin">
  </div>
   <div class="form-group">
    <label for="text">email</label>
    <input type="text" class="form-control" name ="email" >
  </div>
  
   <div class="form-group">
    <label for="text">Nomor Telepon</label>
    <input type="text" class="form-control" name ="nomor_telepon" >
  </div>
  <div class="form-group">
  <label for="comment">Alamat</label>
  <textarea class="form-control" rows="5" name ="alamat"></textarea>
</div>


<div class="form-group">
  <label for="comment">Status</label>
 <select name = "status" class="form-control" name="color">
                <option value="Admin">Admin</option>
                <option value="supe_admin">Super admin</option>
                
            </select>
  
</div>


  
 <div class="form-group">
  <label for="text">Username</label>
   <input type="text" class="form-control" name="username" >
</div>

<div class="form-group">
  <label for="password">Password</label>
   <input type="password" class="form-control" name="password">
</div>


 <div class="form-group">
    <label for="exampleInputFile">upload foto</label>
    <input type="file" name ="gambar" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
  </div>
								<button type="submit" class="btn btn-primary">Submit</button>
								</form>
<?php
include "connection.php";

if($_REQUEST['act'] == "tambah"){
$a = mysqli_query($conn, "select count(id_admin) from admin");
$b = mysqli_fetch_array($a);
$c = $b['count(id_admin)'] + 1 ;
 $d = "'M00".$c."'";
$nama_admin = "'".$_POST['nama_admin']."'";
$alamat = "'".$_POST['alamat']."'";
$no_hp = "'".$_POST['nomor_telepon']."'";
$email = "'".$_POST['email']."'";
$username = "'".$_POST['username']."'";
$password = "'".md5($_POST['password'])."'";
$status = "'".$_POST['status']."'";
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
// Set path folder tempat menyimpan gambarnya
$path = "images/".$nama_file;
    move_uploaded_file($tmp_file, $path);
	$gambar="'". $path ."'";
$sql = "INSERT INTO admin (id_admin, nama_admin,  email,  alamat, no_telp, username, password, status, foto)
VALUES ($d, $nama_admin, $email, $alamat, $no_hp,  $username, $password, $status, $gambar )";

if (mysqli_query($conn, $sql)) {
	echo "<script>window.location='tambah_admin.php?act=success_tambah'</script>";
  
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
