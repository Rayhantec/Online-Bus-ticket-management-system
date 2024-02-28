<?php
	include "connection.php";
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Online Bus Ticket Reservation System
	</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	}
</style>
</head>


<body>
	<div class="wrap">
		<header>
		<div class="logo">
			<img src="pics/bus1.jpg">
			<h1 style="color: black;">ONLINE BUS TICKET RESERVATION SYSTEM</h1>
		</div>
			<nav >
				<ul class="hover">
					<li><a href="index1.php">HOME</a></li>
					<li><a href="login.php">LOG_IN</a></li>
					<li><a href="registration.php">REGISTRATION</a></li>
					<li><a href="admin_login1.php">ADMIN_LOGIN</a></li>
					<li><a href="buslist.php">BUSES</a></li>
					<li><a href="feedback1.php">FEEDBACK</a></li>
				</ul>
			</nav>
		</header>
		<section>
		<div class="sec_img">
			<br><br><br>
			<div class="box">
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 45px;">Welcome to Amaze Travels</h1><br><br>
				<h1 style="text-align: center;font-size: 35px;">24 hours on your service </h1><br>
			</div>
		</div>
		</section>
		<footer>
			<p style="color:black;  text-align: center; ">
				<br>
				Email: amazetravels@gmail.com <br><br>
				Mobile: +8801721352787 <br><br>
				Developed by Md Rayhan Uddin, Habibur Rahman and Md Jubayer Rahman
			</p>
		</footer>
	</div>
</body>

</html>