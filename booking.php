<?php
  include "connection.php";
  
?>
<!DOCTYPE php>
<php>
<head>

  <title>Ticket Booking</title>
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
          <li><a href="buslist.php">BUSES</a></li>
          <li><a href="feedback.php">FEEDBACK</a></li>
        </ul>
      </nav>
</header>

<section>
  <div class="reg_img">

    <div class="box2">
        <h1 style="text-align: center; font-size: 35px;">Amaze Travels Bus Ticket Reservation System</h1><br>
        <h1 style="text-align: center; font-size: 25px;">Ticket Booking Form</h1><br>
      <form name="Registration" action="" method="">
        <br><br>
        <div class="login">
          <input type="text" name="from" placeholder="From" required=""> <br><br>
          <input type="text" name="to" placeholder="To" required=""> <br><br>
          <input type="date" name="j_date" placeholder="Date of Journey" required=""> <br><br>
          <input type="date" name="return" placeholder="Return of Journey"><br><br>

          <button>Search Buses</button></div>
      </form>
     
    </div>
  </div>
</section>
</body>