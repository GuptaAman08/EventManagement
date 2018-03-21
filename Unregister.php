<?php
	session_start();
	require "Connection.php";

	if($_GET['id'] == 5){
		$eve = "Western_Solo";
		$exist = mysqli_num_rows($conn->query("SELECT * from reg_event where Username='" .$_SESSION['u_name']."'and Event ='". $eve ."'"));
		if($exist != 0){
			$conn->query("DELETE from reg_event where Username='" .$_SESSION['u_name']."'and Event ='". $eve ."'");
			header("location:Waiting.php?var=1");
		}else{
			header("location:Register.php");
		}
	}

	if($_GET['id'] == 6){
		$eve = "Classical_Concert";
		$exist = mysqli_num_rows($conn->query("SELECT * from reg_event where Username='" .$_SESSION['u_name']."'and Event ='". $eve ."'"));
		if($exist != 0){
			$conn->query("DELETE from reg_event where Username='" .$_SESSION['u_name']."'and Event ='". $eve ."'");
			header("location:Waiting.php?var=2");
		}else{
			header("location:Register.php");
		}
	}

	if($_GET['id'] == 7){
		$eve = "Group_dance";
		$exist = mysqli_num_rows($conn->query("SELECT * from reg_event where Username='" .$_SESSION['u_name']."'and Event ='". $eve ."'"));
		if($exist != 0){
			$conn->query("DELETE from reg_event where Username='" .$_SESSION['u_name']."'and Event ='". $eve ."'");
			header("location:Waiting.php?var=3");
		}else{
			header("location:Register.php");
		}
	}

	if($_GET['id'] == 8){
		$eve = "Show_Stopper";
		$exist = mysqli_num_rows($conn->query("SELECT * from reg_event where Username='" .$_SESSION['u_name']."'and Event ='". $eve ."'"));
		if($exist != 0){
			$conn->query("DELETE from reg_event where Username='" .$_SESSION['u_name']."'and Event ='". $eve ."'");
			header("location:Waiting.php?var=4");
		}else{
			header("location:Register.php");
		}
	}
?>