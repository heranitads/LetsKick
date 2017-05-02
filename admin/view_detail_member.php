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
	
			<div class="sidebar">
			<div class="brand">
				<a href="index.html"><img src="assets/img/logo.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="sidebar-scroll">
				<nav>
				<ul class="nav">
					<li><a href="index.php" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="view_penyedia.php" class=""><i class="lnr lnr-code"></i> <span>Penyedia Futsal</span></a></li>
						<li><a href="view_member.php" class="active"><i class="lnr lnr-users"></i> <span>Member</span></a></li>
						<li><a href="view_transaksi.php" class=""><i class="fa fa-credit-card"></i> <span>Transaksi Penyedia Futsal</span></a></li>
										
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
					
					session_start();
					if(empty($_SESSION['id_admin'])){
						echo "<script>window.location.href='login.php';</script>";

					}
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
									<h3 class="panel-title">Detail Member</h3>
								</div>
								<div class="panel-body">
									<?php
											include "connection.php";
										
											$a = mysqli_query($conn, "select * from member where idmember ='".$_REQUEST['id']."'");
$b = mysqli_fetch_array($a);

										?>
										
											
										
								 <div class="form-group">
    <label for="text">Nama Member  :   <?php echo $b['nama_member']; ?>  </label>
    
  </div>
   <div class="form-group">
    <label for="text">email   :  <?php echo $b['email']; ?>   </label>

  </div>
  
   <div class="form-group">
    <label for="text">Nomor Telepon  :   <?php echo $b['no_telp']; ?>   </label>
   
  </div>
  <div class="form-group">
  <label for="comment">Alamat :  <?php echo $b['alamat']; ?> </label>
  
</div>


 
  
 <div class="form-group">
  <label for="text">Username  :  <?php echo $b['username']; ?> </label>
  
</div>




 <div class="col-md-12 col-xs-12">
 
 <?php  if ($b['foto'] == "images/") { 
?>


	<img src = "images/member.jpg"  class="img-responsive">  
	</br>
	</br>
   <?php
	
 } else {
	 
 
 ?>
  <img src = "<?php echo $b['foto']; ?>"  class="img-responsive">  
	</br>
	</br>
	<?php
 }
 
 ?>
 
 	</div>
	
	<button type="button" class="btn btn-primary" onclick="window.location.href='view_member.php'; ">Kembali</button>

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
