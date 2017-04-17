<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Klorofil - Free Bootstrap Dashboard Template</title>
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
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div>
							
							<?php
							
							error_reporting(0);
							if($_REQUEST['act'] == "salah"){
							
							
							?>
							<div class="alert alert-danger">
  <strong>Peringatan!</strong> Maaf password salah
</div>

<?php

}

?>
							<form class="form-auth-small" method="post" action="login.php?act=login" enctype="multipart/form-data">
								<div class="form-group">
									<label for="signup-email" class="control-label sr-only">username</label>
									<input type="text" class="form-control" id="signup-email"     placeholder="username" name ="username">
								</div>
								<div class="form-group">
									<label for="signup-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="signup-password"  placeholder="Password" name="password" >
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom">
									<span><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
								</div>
							</form>
							
								<?php
								error_reporting(0);
								if($_REQUEST['act'] == "login"){
											include "connection.php";

											$a = mysqli_query($conn, "select * from admin where username ='".$_POST['username']."' and password = '".$_POST['password']."'");
$b = mysqli_fetch_array($a);

if(isset($b['id_admin'])){
session_start();
 

 

$_SESSION["id_admin"] = $b['id_admin'];

echo "<script>window.location.href='view_member.php';</script>";
} else {
echo "<script>window.location.href='login.php?act=salah';</script>";

} 

}
										?>
										
											
										
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading"> Lets Kick</h1>
							<p>Login admin</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
