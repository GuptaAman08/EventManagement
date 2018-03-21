<?php 
session_start();
session_destroy();
header("location:login.php");

	if($_SESSION == null){
		header("location:login.php");
	}
	

?>
