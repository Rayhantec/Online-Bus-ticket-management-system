
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
					<li><a href="login.php">LOG_IN</a></li>
					<li><a href="buslist.php">BUSES</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
				</ul>
			</nav>
		</header>
		<section>
			
		<div class="box10">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;"> Amaze Travels</h1><br>
        <h1 style="text-align: center; font-size: 25px;">User Registration Form</h1><br>
      <form name="Registration" action="" method="post">
        <br><br>
        <div class="login">
          <input type="text" name="first" placeholder="First Name" required=""> <br><br>
          <input type="text" name="last" placeholder="Last Name" required=""> <br><br>
          <input type="text" name="username" placeholder="Username" required=""> <br><br>
          
          <input type="text" name="email" placeholder="Email" required=""><br><br>
          <input type="text" name="contact" placeholder="Contact Number" required=""><br><br>
          <input type="password" name="password" placeholder="Password" required=""> <br><br>
          
          
          <input type="submit" name="submit" value="Sign Up" style="color: #800000; width: 80px; height: 40px">
      </div>

       
      </form>
     
    </div>
    </div>
		</section>

	
	<?php
		if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT username from `customer`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `CUSTOMER` VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[email]', '$_POST[contact]', '$_POST[password]');");
        ?>
          <script type="text/javascript">
           alert("Registration successful");
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }


      }
	?>
</body>
</html>