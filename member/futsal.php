<!doctype html>
<html lang="en">

<head>
	<title>Profile | Klorofil - Free Bootstrap Dashboard Template</title>
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
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>   

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

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
						<li><a href="index.html" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
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
						
						<ul class="nav navbar-nav navbar-right">
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#">Basic Use</a></li>
									<li><a href="#">Working With Data</a></li>
									<li><a href="#">Security</a></li>
									<li><a href="#">Troubleshooting</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets2/img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
									<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
									<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
									<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
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
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<?php
											include "connection.php";
										
											$a = mysqli_query($conn, "select * from penyedia_futsal where id_penyedia_futsal ='".$_REQUEST['id']."'");
											$b = mysqli_fetch_array($a);
if (empty($b['upload_foto'])){
										
									
$gambar = "profile-bg.png?1480069110";
								
									} else {
										
										
									
									$gambar = "";
								
									}
									?>
									
									
									<div class="profile-main" style=" background-image: url(./img/<?php echo $gambar; ?>);	">
									
										<br>
										<br>
										<br>
										<br>
										<br>
										<br>
										<br>
										<br>
										<br>
										</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-12  pull-right stat-item">
													 <?php echo $b['nama_penyedia']; ?>
											</div>
											
											
										</div>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info
									
										<h4 class="heading">Info Lapangan</h4>
										<br>
										<ul class="list-unstyled list-justify">
											<li>Alamat : <?php echo $b['alamat']; ?> </li>
											<li>Nomor Telepon : <?php echo $b['no_telp']; ?> </li>
											<li>Email : <?php echo $b['email']; ?> </li>
											<li>Website : <?php echo $b['website']; ?> </li>
										</ul>
									</div>
									<div class="profile-info">
										<h4 class="heading">Social</h4>
										<ul class="list-inline social-icons">
											<li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
										</ul>
									</div>
									<div class="profile-info">
										<h4 class="heading">About</h4>
										<p> <?php echo $b['deskripsi']; ?> </p>
									</div>
									</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								<!-- TABBED CONTENT -->
								<div class="custom-tabs-line tabs-line-bottom left-aligned">
									<ul class="nav" role="tablist">
										<li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Fasilitas Lapangan</a></li>
										<li><a href="#tab-bottom-left2" role="tab" data-toggle="tab">Lapangan </a></li>
									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane fade in active" id="tab-bottom-left1">
										<li> <?php echo $b['fasilitas']; ?> </li>
									</div>
									<div class="tab-pane fade" id="tab-bottom-left2">
									
									<?php
											include "connection.php";
										
											$a = mysqli_query($conn, "select * from penyedia_futsal where id_penyedia_futsal ='".$_REQUEST['id']."'");
											$b = mysqli_fetch_array($a);
for($a =1; $a <= $b['jumlah_lapangan']; $a++){
									
									?>
<div class="row">
<div class="col-md-6">
<img src="assets2/img/gambar.jpg" >
</div>
<div class="col-md-6">
Pemakai saat ini : <?php echo $b['jumlah_lapangan']; ?>

Nama :

Durasi :

Waktu : 

<button type="button" class="btn btn-info"  data-toggle="modal" data-target="#myModal">Pesan</button>
</div>


</div>
		<?php
}

?>		
									</div>
								</div>
								<!-- END TABBED CONTENT -->
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
			
			<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pesan Lapangan</h4>
        </div>
        <div class="modal-body">
      <form method="post" action="futsal.php?id=<?php echo $_REQUEST['id']; ?>&act=<?php echo "order"; ?>" enctype="multipart/form-data">
								
								 

   <div class="form-group">
        <label class="col-xs-3 control-label">Durasi</label>
       
            <select class="form-control" name="durasi">
                <option value="">Pilih durasi</option>
                <option value="1">1 jam</option>
                <option value="2">2 jam </option>
                <option value="3">3 jam</option>
                <option value="4">4 jam</option>
            </select>
       
		 
    </div>
	
		 
<div class="form-group">
<label class=" control-label">jam</label>
       </br>
                <div class='input-group date' id='datetimepicker3'>
                    <input type='text' class="form-control" name="jam" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
            </div>
	
	<div class="form-group">
<label class=" control-label">tanggal</label>
       </br>
                <div class='input-group date' id='datetimepicker10'>
                    <input type='text' class="form-control" name="tanggal" />
                    <span class="input-group-addon">
                         <span class="fa fa-calendar">
                    </span>
                </div>
            </div>
	
	
	
							
								
      
        <div class="modal-footer">
<button type="submit" class="btn btn-info" >Pesan</button>		
</form>
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
			<footer>
				<?php
include "connection.php";

if($_REQUEST['act'] == "order"){
						$a = mysqli_query($conn, "select * from transaksi where id_penyedia_futsal='$_REQUEST[id]' and id_lapangan = 'LPN0001'");
$b = mysqli_fetch_array($a);
if($b['tanggal'] ==  $_POST['tanggal'] && $b['jam'] == $_POST['jam'] ){
	
	echo "<script>udah ke booking</script>";


} else {
 $d = "'M00".date("s")."'";
 $h = $_POST['durasi'] * 3000;

$sql = "INSERT INTO transaksi VALUES ($d, 'M002', '$_REQUEST[id]', 'LPN0001',' $_POST[durasi]', '$_POST[jam]', '$h', '$_POST[tanggal]', 'Belum diverifikasi', '' )";

if (mysqli_query($conn, $sql)) {
	echo "<script>alert('haha'".$b['tanggal'].$_POST['tanggal'].");</script>";
  
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	echo "<script>alert('" . $sql . "');</script>";
}
mysqli_close($conn);
}
}


?>
			</footer>
		</div>
		<!-- END MAIN -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets2/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<script src="assets2/js/klorofil.min.js"></script>
	
 <script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
        </script>

   <script type="text/javascript">
        $(function () {
            $('#datetimepicker10').datetimepicker({
				    format: 'DD/MM/YYYY',
               icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-arrow-up",
                    down: "fa fa-arrow-down"
                }
            });
        });
    </script>
 
</body>

</html>
