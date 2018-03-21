<?php
	
	
?>

<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Login Page</title>
	<style type="text/css">
		#content{
			max-width: 100%;
			width: 100%;
			margin:0 auto;
			
		}
		.box2{
			height: 350px;
			flex-basis: 250px;
			flex-shrink: 1;
			flex-grow: 1;
		}
		.box3{
			height: 350px;
			flex-basis: 250px;
			flex-shrink: 1;
			flex-grow: 1;
		}
		#flex-container{
			display: flex;
			flex-wrap: wrap;
		}
		.box{
			flex-shrink: 1;
			flex-grow: 1;
			height: 300px;
			flex-basis: 250px; 
		}

		.one:hover,.five:hover,.eight:hover{
			transition: 0.5s;
			opacity: 1.0;
			 -webkit-filter: sepia(100%);
			filter: sepia(100%);
		}
		.one{

			background-size: cover;
			background-repeat: no-repeat;
			opacity: 0.4;
			background-image: url("con1.jpg");
		}
	
		.two{
			flex-grow: 1.9;
			background-color: #1f1f2e;
		}
		
		#link{
			position: absolute;
			width: 600px;
			height: 300px;
			cursor: pointer;
		}

		.three{
			flex-grow: 1.9;
			background-color:#29293d;
		}
		.four:hover{
			transition: 0.5s;
			opacity: 1.0;
		}
		.four,.five,.eight{
			background-size: cover;
			background-repeat: no-repeat;
			opacity: 0.4;
			background-image: url("classic.jpg");
			
		}

		.five{
			background-image: url("dance.jpg");
		}

		.six{
			background-color: #1f1f2e;
			flex-grow: 2;
		}
		.seven{
			background-color:#29293d;
			flex-grow: 2.2;	
		}
		
		.eight{
			background-image: url("rapper.jpg");
		}
		.nine{
			flex-grow:1;
			background-color: green;
		}
		.ten{
			flex-grow: 2;
			background-color: blue;
		}
		.elev{
			flex-grow:1;
			background-color: red;
		}
		#title{
			color:#14141f;
			height: 3em;
			font-size:1.6em;
			font-style: verdana;
			text-align: center;
			background-color:#b3c6ff;
			padding-top: 1.1em;
		}
	</style>
</head>
<body>

	<?php 
		session_start();
	?>
	<div id="nav_sec">
		<a class="ele" id="active" href="Home.php">Home</a>
        <a class="ele" href="#">Profile</a>
        <a class="ele" href="Register.php">Attending</a>
        <a class="ele" href="#">Lorem</a>
        <span class="ele" style="margin-left: 38em;background-color: white;"><?php echo "Welcome " . $_SESSION['u_name'];?></span>
        <a href="logout_ctrl.php" class="ele" style="float: right;">Logout</a>
	</div>
	<div id="bg">
		<div id="text">Welcome to Grand Eventena</div>
	</div>
	<div id="title">
		We Welcome all fervent artist to this Grand Eventena!!!!
	</div>

	<div id="content">
		<div id="flex-container">
			<div class="box one"><a id="link" href="tick_gen.php?id=1"></a></div>
			<div class="box two"><div id="txt">Western Solo</div><hr class="line"><p class="txt_bel">Lorem Ipsum is simply dummy text</p></div>
		</div>
		<div id="flex-container">
			<div class="box2 three"><div id="txt">Classical Concert</div><hr class="line"><p class="txt_bel">Lorem Ipsum is simply dummy text</p></div>
			<div class="box2 four"><a id="link" href="tick_gen.php?id=2"></a></div>
		</div>
	
		<div id="flex-container">
			<div class="box3 five"><a id="link" href="tick_gen.php?id=3"></a></div>
			<div class="box3 six"><div id="txt">Group Dance</div><hr class="line"><p class="txt_bel">Lorem Ipsum is simply dummy text</p></div>
		</div>

		<div id="flex-container">
			<div class="box2 seven"><div id="txt">Show Stopper's</div><hr class="line"><p class="txt_bel">Lorem Ipsum is simply dummy text</p></div>
			<div class="box2 eight"><a id="link" href="tick_gen.php?id=4"></a></div>
		</div>
		<div  id="flex-container">
			<div class="box nine"></div>
			<div class="box ten"></div>
			<div class="box elev"></div>
		</div>
	</div>
	
	



</body>
</html>