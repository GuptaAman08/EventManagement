<?php
	session_start();
	require "Connection.php";

	if($_GET['var'] == 1){
		
		$conn->query("INSERT INTO reg_event SELECT * from waiting where Event = 'Western_Solo' Limit 1");
		$result = $conn->query("SELECT * from waiting where Event = 'Western_Solo' LIMIT 1");
		$row = $result->fetch_assoc();
		$conn->query("DELETE from waiting where Username='" .$row["Username"]."'and Event ='Western_Solo'");
		header("location:Register.php");
    		
		
	}

	if($_GET['var'] == 2){
		
		$conn->query("INSERT INTO reg_event SELECT * from waiting where Event = 'Classical_Concert' Limit 1");
		$result = $conn->query("SELECT * from waiting where Event = 'Western_Solo' LIMIT 1");
		$row = $result->fetch_assoc();
		$conn->query("DELETE from waiting where Username='" .$row["Username"]."'and Event ='Classical_Concert'");
		header("location:Register.php");
	}

	if($_GET['var'] == 3){
		
		$conn->query("INSERT INTO reg_event SELECT * from waiting where Event = 'Group_dance' Limit 1");
		$result = $conn->query("SELECT * from waiting where Event = 'Western_Solo' LIMIT 1");
		$row = $result->fetch_assoc();
		$conn->query("DELETE from waiting where Username='" .$row["Username"]."'and Event ='Group_dance'");
		header("location:Register.php");
	}

	if($_GET['var'] == 4){
		
		$conn->query("INSERT INTO reg_event SELECT * from waiting where Event = 'Show_Stopper' Limit 1");
		$result = $conn->query("SELECT * from waiting where Event = 'Western_Solo' LIMIT 1");
		$row = $result->fetch_assoc();
		$conn->query("DELETE from waiting where Username='" .$row["Username"]."'and Event ='Show_Stopper'");
		header("location:Register.php");
	} 
?>