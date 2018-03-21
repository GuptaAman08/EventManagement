<?php
	session_start();
	require "Connection.php";
	$user_name = mysqli_real_escape_string($conn,$_POST['u_name']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
	$sql = "SELECT * from users where Username = '" .$user_name. "'and Password ='". $pwd ."'";
	$result = $conn->query($sql);
	if(!($result->num_rows==0)){
		
		$_SESSION['u_name'] = $_POST['u_name'];
		header("location:Home.php");
	}
	else {
    	
    	header("location:login.php");
	}

?>
