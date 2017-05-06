<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Stylish Creative Forms Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
  <title>Lets Kick</title>
  
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.css" rel="stylesheet">

<br> <br> <br> <br> <br>

</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent"></a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top"> Lets Kick</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
  <body>
<!-- main -->
<div class="main">
        
        
        <div class="main-w3l">
            <h1 class="logo-w3"></h1>
            <div class="w3layouts-main">
                <h2>Login</h2>
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
                    <form action="login.php?act=login" method="post">
                        <input placeholder="Username" name="username" type="text" required="">
                       
                        <input placeholder="password" name="password" type="password" required="">
                        
                        <input type="submit" value="Login" name="login">
                    </form>
                    <h6><a href="#">Forgot Password?</a></h6>
                    <h3>(or)</h3>
                    <div class="social_icons agileinfo">
                        <ul class="top-links">
                                    <li><a href="./fbconfig.php"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="www.linked.in"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="www.google.com"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                    </div>
            </div>
            
           	<?php
								error_reporting(0);
								if($_REQUEST['act'] == "login"){
											include "connection.php";

											$a = mysqli_query($conn, "select * from member where username ='".$_POST['username']."' and password = '".$_POST['password']."'");
$b = mysqli_fetch_array($a);

if(isset($b['idmember'])){
session_start();
 

 

$_SESSION["idmember"] = $b['idmember'];

echo "<script>window.location.href='../member/index.php';</script>";
} else {
echo "<script>window.location.href='login.php?act=salah';</script>";

} 

}
										?>
										
											
            <!--//footer-->
        </div>
</div>


<!--scripts--> 

        <!-- js -->
            <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <!-- //js -->
        <!-- particles-JavaScript -->
            <script src="js/particles.min.js"></script>
                
        <!-- //particles-JavaScript -->
<!--//scripts--> 


</body>

</html>
