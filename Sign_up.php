<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style type="text/css">
		.button{
			border:1px solid white; 
			width: 7em;
			height: 3em;
			background-color: #333356;
			color:white;
		}
		.button:hover{
			border:1px solid cyan; 
			color:cyan;
		}
		#content{
			background-color: #29293d;
			width: 40%;
			height: 16em;
		}
	</style>
</head>
<body>
	
	<p>Login Form</p>
	<form method="post" action="Sign_up_ctrl.php" id="content">
		<fieldset style="border:2px solid white;background-color: #1f1f2e;height: 20">
			<legend style="text-align: center;font-size: 2em;color: white;">Sign_Up</legend>
			<label style="color:white">UserName</label><br>
			<input type="text" name="u_name"><br><br>
			<label style="color:white">Email</label><br>
			<input type="Email" name="email"><br><br>
			<label style="color:white">Password</label><br>
			<input type="password" name="pwd"><br><br>
			<label style="color:white">Confirm Password</label><br>
			<input type="password" name="confirm_pwd"><br><br>
			<input type="submit" class="button" name="Sub" value="login">
		</fieldset>
	</form>

</body>
</html>