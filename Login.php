<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style type="text/css">
	
		
		.ele:hover{
			
			background-color: white;
		}
		#nav_sec{
			display: inline-block;
			width: 100%;
        	background-color: black;
		}
		body{
			margin-top:0px;
			margin-left: 0px;
			
		}
		.ele{
			color:#009688;
			padding: 10px 20px;
			display: inline-block;
        	font-size: 1.3em;
			text-decoration: none;
		}
		#bg:hover{
			opacity: 1.0;
		}
		#bg{
			background-image: url("back.jpg");
	        background-repeat: no-repeat;
	        background-size: cover;
	        margin-left: 0;
		    width: 100%;
	        height: 420px;
	        opacity: 0.6;
	        z-index: -1;
		}
		#block{
			
		}
		#text{
			position: absolute;
			margin-left: 3em;
			margin-top: 3em;
			font-size: 3em;
			font-style: verdana;
			color: white;
			text-decoration: underline;
		}
		#img1:hover{
			opacity: 1.0;
		}
		#img2:hover{
			opacity: 1.0;
		}
		#img2{
			margin-top:5em;
			background-image: url("wrap.jpg");
			background-size: cover;
			position: absolute;
			width:35%;
			height:40%;
			background-repeat: no-repeat;
			opacity: 0.3;
			text-decoration: none;
		}
		#img1{
			background-image: url("con1.jpg");
			background-size: cover;
			position: absolute;
			width:30%;
			height:35%;
			background-repeat: no-repeat;
			opacity: 0.4;
			text-decoration: none;
		}
		#txt{
			position: absolute;
        	font-size: 1.8em;
        	color:#009688;
        	font-style: verdana;
        	margin-top: 3.5em;
        	
    	}
		#block1{
			width: 100%;
		}
		#content{
			height: 50em;
		}	
		#desc{
			
			margin-left: 32%;
			font-size: 1.4em;
			font-weight: 400;
			margin-right: 10em;
		}
	
	</style>
</head>
<body>
	<div id="nav_sec">
		<a class="ele" id="active" href="#">Home</a>
        <a class="ele" href="#">Ipsum</a>
	</div>
	<div id="bg">
		<div id="text">Welcome to Eventena....</div>
	</div>
	<div style="height: 3em;font-size:1.2em;font-style: verdana;text-align: center;background-color: darkslateblue;padding-top:4px; ">
		Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="content" style="border: 1px solid black;">
	
		<div class="block1" id="">
			<a href="#" id="img1">
				<span id="txt">Western_Solo</span>
			</a>
            <div class="block1" id="desc">
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim
            </div>
        </div>
        <div class="" id="block2">
			<a href="#" id="img2">
				<span id="txt">Wrap </span>
			</a>
            <div class="" id="">
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            </div>
        </div>
	</div>
	

</body>
</html>