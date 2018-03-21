<?php

require "Connection.php";
	session_start();	
	if(isset($_POST['Sub'])){

		$u_name = mysqli_real_escape_string($conn,$_POST['u_name']);
		$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$conf_pwd = mysqli_real_escape_string($conn,$_POST['confirm_pwd']);
		
		if($conf_pwd == $pwd){
			$sql = "INSERT INTO users (Username,Password,Email) VALUES ('" .$u_name."','" .$pwd."','".$email."')";
			$result = $conn->query($sql);
			
			$_SESSION['u_name'] = $_POST['u_name'];
			header("location:Home.php");
		}
		else{
			echo "Password Mismatch!!!!!";
			header("location:Sign_up.php");
		}
		
	}

?>

