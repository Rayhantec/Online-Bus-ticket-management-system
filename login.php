<?php
	include "connection.php";
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Amaze Travels
	</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width= device-width, initial-scale=1">

<head>
	
<body>

	<div class="wrapper">
		<header>
			<div class="lg">
			<img src="images/lg.ico">
			<h3> &nbsp Amaze Travels</h3>
			</div>	
			<nav>
				<ul> 
					<li><a href="index1.php">HOME</a></li>
					<li><a href="registration.php">REGISTRATON</a></li>
					<li><a href="buslist.php">BUSES</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
				</ul>
			</nav>
		</header>
		<section>
<!--
	<div class="box3">
		<form name="clilogin" action="" method="">
		<p style="font-size: 24px;">Login to your account </p><br>
		<input type="name" name="uname" placeholder="Username"><br><br>
		<input type="password" name="pass" placeholder="Passowrd"><br><br>
		<button>Login</button>
		</center>
		</form>
	</div>
-->

		<div class="lg_img">
    <br> <br><br>
    <div class="box9">
        <h1 style="text-align: center; font-size: 35px;font-family: Verdana;">Amaze Travels</h1><br>
        <h1 style="text-align: center; font-size: 25px;">User Login Form</h1><br>
      <form name="login" action="" method="post">
        <br><br>
        <div class="login">
          <input type="text" name="username" placeholder="Username" required=""> <br><br>
          <input type="password" name="password" placeholder="Password" required=""> <br><br>
           <input type="submit" name="submit" value="Login" style="color: #800000; width: 80px; height: 40px">

          </div>
      </form>
      <p style="color: white; padding-left: 15px;">
        <br><br>
        <a style="color:white;" href="">Forgot password?<br><br></a> 
        New to this website?<a style="color: white;" href="registration.php">&nbsp&nbspSign Up</a>
      </p>
    </div>
  </div>
  </div>
		</section>
		<?php
		if(isset($_POST['submit']))
 		{
 			$count=0;
 			$res=mysqli_query($db,"SELECT * FROM `customer` WHERE username='$_POST[username]' && password='$_POST[password]';");
 			$row=mysqli_fetch_assoc($res);
 			$count=mysqli_num_rows($res);

 			if($count==0)
 			{
 				?>
 				<!--
 					<script type="text/javascript">
 						alert("The username and password doesn't match.");
 					</script>
 				-->
 				<div class="alert alert-danger" style="width:700px; margin-left: 320px; margin-top: -700px; color:#ff120d;text-align: center;font-size: 15px;">
 					<strong>
 						The username and password doesn't match.
 					</strong>
 				</div>
 				<?php
 			}
 			else
 			{
 				?>
 				<script type="text/javascript">
 					window.location="booking.php"
 				</script>
 				<?php
 			}
 		}

		?>
	
</body>
</html>