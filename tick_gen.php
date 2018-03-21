<?php
	session_start();
	require "Connection.php";
	
	if($_GET['id'] == 1){
		$eve = "Western_Solo";
		$sql = "SELECT * from reg_event where Event = '".$eve."'";
		$result = mysqli_num_rows($conn->query($sql));
		if($result<1){
			
			$exist = mysqli_num_rows($conn->query("SELECT * from reg_event where Username='" .$_SESSION['u_name']."'and Event ='". $eve ."'"));
			if($exist == 0){
				$conn->query("INSERT INTO reg_event (Username,Event)  VALUES ('" .$_SESSION['u_name']."','".$eve."')");
				header("location:Register.php");
			}else{
				echo "You registration is already recorded.....";
				header("location:Register.php");
			}
		}else if($result>=1 && $result<30){

			$exist1 = mysqli_num_rows($conn->query("SELECT * from reg_event where Username='" .$_SESSION['u_name']."'and Event ='". $eve ."'"));
			$exist2 = mysqli_num_rows($conn->query("SELECT * from waiting where Username='" .$_SESSION['u_name']."'and Event ='". $eve ."'"));
			if($exist1 == 0 && $exist2 == 0){
				$conn->query("INSERT INTO waiting (Username,Event)  VALUES ('" .$_SESSION['u_name']."','".$eve."')");
				header("location:Register.php");
			}else{
				echo "You registration is already recorded.....";
				header("location:Register.php");
			}
		}else{
			$_SESSION['error'] = "Registration is Full!!!!";
			header("location:Register.php");
		}
	}

	if($_GET['id'] == 2){
		$eve = "Classical_Concert";
		$sql = "SELECT * from reg_event where Event = '".$eve."'";
		$result = mysqli_num_rows($conn->query($sql));
		if($result<1){
			$exist = mysqli_num_rows($conn->query("SELECT * from reg_event where Username='" .$_SESSION['u_name']."'and Event ='". $eve ."'"));
			if($exist == 0){
				$conn->query("INSERT INTO reg_event (Username,Event)  VALUES ('" .$_SESSION['u_name']."','".$eve."')");
				header("location:Register.php");
			}else{
				echo "You registration is already recorded.....";
				header("location:Register.php");
			}
		}else if($result>=1 && $result<30){

			$exist1 = mysqli_num_rows($conn->query("SELECT * from reg_event where Username='" .$_SESSION['u_name']."'and Event ='". $eve ."'"));
			$exist2 = mysqli_num_rows($conn->query("SELECT * from waiting where Username='" .$_SESSION['u_name']."'and Event ='". $eve ."'"));
			if($exist1 == 0 && $exist2 == 0){
				$conn->query("INSERT INTO waiting (Username,Event)  VALUES ('" .$_SESSION['u_name']."','".$eve."')");
				header("location:Register.php");
			}else{
				echo "You registration is already recorded.....";
				header("location:Register.php");
			}
		}else{
			$_SESSION['error'] = "Registration is Full!!!!";
			header("location:Register.php");
		}
	}

	if($_GET['id'] == 3){
		$eve = "Group_Dance";
		$sql = "SELECT * from reg_event where Event = '".$eve."'";
		$result = mysqli_num_rows($conn->query($sql));
		if($result<7){
			
			$exist = mysqli_num_rows($conn->query("SELECT * from reg_event where Username='" .$_SESSION['u_name']."'and Event ='". $eve ."'"));
			if($exist == 0){
				$conn->query("INSERT INTO reg_event (Username,Event)  VALUES ('" .$_SESSION['u_name']."','".$eve."')");
				header("location:Register.php");
			}else{
				echo "You registration is already recorded.....";
				header("location:Register.php");
			}
		}else if($result>=7 && $result<30){

			$exist1 = mysqli_num_rows($conn->query("SELECT * from reg_event where Username='" .$_SESSION['u_name']."'and Event ='". $eve ."'"));
			$exist2 = mysqli_num_rows($conn->query("SELECT * from waiting where Username='" .$_SESSION['u_name']."'and Event ='". $eve ."'"));
			if($exist1 == 0 && $exist2 == 0){
				$conn->query("INSERT INTO waiting (Username,Event)  VALUES ('" .$_SESSION['u_name']."','".$eve."')");
				header("location:Register.php");
			}else{
				echo "You registration is already recorded.....";
				header("location:Register.php");
			}
		}
		else{
			$_SESSION['error'] = "Registration is full, your entry is made in the waiting list........";
			header("location:Register.php");
		}
	}

	if($_GET['id'] == 4){
		$eve = "Show_Stopper";
		$sql = "SELECT * from reg_event where Event = '".$eve."'";
		$result = mysqli_num_rows($conn->query($sql));
		if($result<7){
			
			$exist = mysqli_num_rows($conn->query("SELECT * from reg_event where Username='" .$_SESSION['u_name']."'and Event ='". $eve ."'"));
			if($exist == 0){
				$conn->query("INSERT INTO reg_event (Username,Event)  VALUES ('" .$_SESSION['u_name']."','".$eve."')");
				header("location:Register.php");
			}else{
				echo "You registration is already recorded.....";
				header("location:Register.php");
			}
		}else if($result>=7 && $result<30){

			$exist1 = mysqli_num_rows($conn->query("SELECT * from reg_event where Username='" .$_SESSION['u_name']."'and Event ='". $eve ."'"));
			$exist2 = mysqli_num_rows($conn->query("SELECT * from waiting where Username='" .$_SESSION['u_name']."'and Event ='". $eve ."'"));
			if($exist1 == 0 && $exist2 == 0){
				$conn->query("INSERT INTO waiting (Username,Event)  VALUES ('" .$_SESSION['u_name']."','".$eve."')");
				header("location:Register.php");
			}else{
				echo "You registration is already recorded.....";
				header("location:Register.php");
			}
		}else{
			$_SESSION['error'] = "Registration is full, your entry is made in the waiting list........";
			header("location:Register.php");
		}
		
	}

?>
