<?php
	session_start();
	?>
  <!DOCTYPE html>
<html>
<head>
<title> nsu bus service </title> <!-- title -->
<link rel="stylesheet" type="text/css" href="home.css"> <!-- css file link -->
</head>
<body>
  <header>
    <div class="main">
      <div class="logo">
        <img src="nsulogo.png"> <!-- add logo -->
      </div>
    <ul> <!-- for navigation bar unorder list  -->
       <li class="active"><a href="home.html">HOME</a></li>
       <li><a href="#">Services</a></li>
       <li><a href="delete.php">DELETE ACCOUNT</a></li>
       <li><a href="#">Contact</a></li>
</ul>
     </div>
     <div class="title"> <!-- header -->
       <h1>NSU BUS SERVICE</h1>
       </div>
<div class="button "> <!--creat button -->
  <a href="#" class="btn">Booking</a> <!-- Booking button  -->
  <a href="http://localhost/busNEW/check.php" class="btn">Available Seat for Your Location </a> <!--Available Seat for You location button </p> -->
       <a href="http://localhost/busNEW/login.php" class="btn">Log out</a> <!-- Log out  -->
      </div>
</header>
</body>
</html>
