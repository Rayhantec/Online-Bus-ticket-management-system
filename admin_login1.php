<?php
  include "connection.php";
  
?>
<!DOCTYPE html>
<html>
<head>

  <title>Admin Login</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
</head>
<body>
<header style="height: 90px;">
  
<div class="logo">
      <h1 style="color: black; font-size: 25px;word-spacing: 10px; line-height: 80px;margin-top: 20px;">ONLINE BUS TICKET RESERVATION SYSTEM</h1>
    </div>

      <nav>
        <ul>
          <li><a href="index1.php">HOME</a></li>
          <li><a href="">FEEDBACK</a></li>
        
        </ul>
      </nav>
</header>
<section>
  <div class="log_img">
    <br> <br><br>
    <div class="box1">
        <h1 style="text-align: center; font-size: 35px;">Amaze Travels Bus Ticket Reservation System</h1><br>
        <h1 style="text-align: center; font-size: 25px;">Admin Login Form</h1><br>
      <form name="login" action="" method="post">
        <br><br>
        <div class="login">
          <input type="text" name="username" placeholder="Admin Name" required=""> <br><br>
          <input type="password" name="password" placeholder="Password" required=""> <br><br>
          <input type="submit" name="submit" value="Login" style="color: #800000; width: 80px; height: 40px">
        </div>
      </form>
      
    </div>
  </div>
</section>
<?php
    if(isset($_POST['submit']))
    {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]' && password='$_POST[password]';");
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
          window.location="index1.php"
        </script>
        <?php
      }
    }

    ?>
</body>
</html>
