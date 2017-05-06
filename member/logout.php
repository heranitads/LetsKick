<?php
session_start(); 
session_destroy();

header('location:../lets-kick_login/login.php');
?>