

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Ticket Display Page</title>
	<style type="text/css">
		
		#content{
			width:100%;
			background-color: #ff66b3;
			margin: 0 auto;
		}
		#flex-container{
			display: flex;
			flex-wrap:wrap;
		}
		.box{
			height: 330px;
			flex-basis: 350px;
			flex-shrink: 1;
		}
		.one{
			background-color: #B0BEC5;
			flex-grow: 10;
		}
		.two{
			background-color: #B0BEC5;
			flex-grow: 0.8;
			flex-basis: 200px;
		}
		.three{
			background-color: #B0BEC5;
			flex-grow: 10;
		}
		.box_top{
			height: 100px;
			width: 100%;
			background-color: #B0BEC5;
		}
		.tic1_com{
			border-style: outset;
			margin-left: 16em;
			margin-top: 4em;
			position: absolute;
			width: 22em;
			height: 15em;
			border-left: 6px solid white;
    		background-color:#003366;
    		color:white;
		}
		#tic2{
				
		}
		.tic2_com{
			border-style: outset;
			margin-left: 1em;
			margin-top: 4em;
			position: absolute;
			width: 22em;
			height: 15em;
			border-left: 6px solid white;
    		background-color:#003366;
    		color:white;
		}
		.in_com{
			margin-left: 2em;
			font-size: 2em;
			font-style: ;

		}
		.bel_con{
			margin-left: 3em;
			font-size: 1.4em;
		}
		.line{
			margin-left: 4em;
			width: 15em;
			margin-top: 1em;
		}
		.php{
			padding: 0.2em;
			background-color:#009933;
			margin-left: 3em;
			font-size: 1.5em;
			
		}
		#tic4{
			margin-top: 2em;
		}
		#tic5{
			margin-top: 2em;
		}

		#unreg_but{
			
			padding: 0.2em;
			width: 6em;
			height: 1.5em;
			margin-top: 1.5em;
			cursor: pointer;
		}
		a{
			text-decoration:none;
			color:white;
		}

	</style>
</head>
<body>
	<?php
		session_start();
	?>
	<div  id="content">
		<div id="nav_sec">
		<a class="ele" href="Home.php">Home</a>
        <a class="ele" href="#">Profile</a>
        <a class="ele" id="active" href="Register.php">Attending</a>
        <a class="ele" href="#">Epsolium</a>
        <span class="ele" style="margin-left: 38em;background-color: white;"><?php echo "Welcome " . $_SESSION['u_name'];?></span>
        <a href="logout_ctrl.php" class="ele" style="float: right;">Logout</a>
	</div>
		<div id="flex-container">
			<div class="box_top"></div>
		</div>
		<div id="flex-container">
			<div class="box one">
				<div id="tic1" class="tic1_com">
					<span class="in_com">Western_Solo</span>
					<hr class="line">
					<span class="bel_con">Lorem Ipsum</span>
					<br><br><br>
					<span class="php">
					<?php 
					require "Connection.php";
					$eve = "Western_Solo";
					$exist = mysqli_num_rows($conn->query("SELECT * from reg_event where Username='" .$_SESSION['u_name']."'and Event ='". $eve ."'"));
					if($exist != 0){
						echo "You are Registered";
					}else{
						echo "Unregistered";
					}
					?>
					</span><br>
					<span><button type="button" id="unreg_but" class="php"><a href="Unregister.php?id=5">Unregister</a></button></span>
				</div>
			</div>	
			<div class="box two">
				<div id="tic2"></div>
			</div>
			<div class="box three">
				<div id="tic3" class="tic2_com">
					<span class="in_com">Classical_Concert</span>
					<hr class="line">
					<span class="bel_con">Lorem Ipsum</span>
					<br><br><br>
					<span class="php">
						<?php 
						require "Connection.php";
						$eve = "Classical_Concert";
						$exist = mysqli_num_rows($conn->query("SELECT * from reg_event where Username='" .$_SESSION['u_name']."'and Event ='". $eve ."'"));
						if($exist != 0){
							echo "You are  Registered";
						}else{
							echo "Unregistered";
						}
						?>
					</span><br>
					<span><button type="button" id="unreg_but" class="php"><a href="Unregister.php?id=6">Unregister</a></button></span>
				</div>
			</div>
		</div>
		<div id="flex-container">
			<div class="box_top"></div>
		</div>
		<div id="flex-container">
			<div class="box one">
				<div id="tic4" class="tic1_com">
					<span class="in_com">Group_Dance</span>
					<hr class="line">
					<span class="bel_con">Lorem Ipsum</span>
					<br><br><br>
					<span class="php">
					<?php 
						require "Connection.php";
						$eve = "Group_Dance";
						$exist = mysqli_num_rows($conn->query("SELECT * from reg_event where Username='" .$_SESSION['u_name']."'and Event ='". $eve ."'"));
						if($exist != 0){
							echo "You are  Registered";
						}else{
							echo "Unregistered";
						}
						
					?>
					</span><br>
					<span><button type="button" id="unreg_but" class="php"><a href="Unregister.php?id=7">Unregister</a></button></span>
				</div>
			</div>	
			<div class="box two">
				<div id="tic2"></div>
			</div>
			<div class="box three">
				<div id="tic5" class="tic2_com">
					<span class="in_com">Show_Stopper</span>
					<hr class="line">
					<span class="bel_con">Lorem Ipsum</span>
					<br><br><br>
					<span class="php">
					<?php 
						require "Connection.php";
						$eve = "Show_Stopper";
						$exist = mysqli_num_rows($conn->query("SELECT * from reg_event where Username='" .$_SESSION['u_name']."'and Event ='". $eve ."'"));
						if($exist != 0){
							echo "You are  Registered";
						}else{
							echo "Unregistered";
						}
					?>
					</span><br>
					<span><button type="button" id="unreg_but" class="php"><a href="Unregister.php?id=8">Unregister</a></button></span>
				</div>
			</div>
		</div>
	</div>

</body>
</html>