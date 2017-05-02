<?php

	include "connection.php";
										
										mysqli_query($conn, "delete from member where idmember = '".$_REQUEST['id']."'");

	echo "<script>window.location='view_member.php?act=success_hapus'</script>";
 

?>