<?php

	include "connection.php";
										
										mysqli_query($conn, "delete from admin where id_admin = '".$_REQUEST['id']."'");

	echo "<script>window.location='view_admin.php?act=success_hapus'</script>";
 

?>