<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
	header('location:admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta htt-equiv="x-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
	 <!--custom css file link -->
    <link rel="stylesheet" href="style.css">
		 	  <style>
 body{
	 font-family: verdana;
	background-repeat:no-repeat;
	
 }
 *{
	 margin:0;
	 padding:0;
 }
 header{
	 position: absolute;
	 background-color: #000;
	 width:100%;
	 color:white;
 }
 .header h2{
	 position:absolute;
	 margin-bottom:20px;
	 left:20%;
	 color:white;
 }
 .header{
	 background-color:black;
	 height: 10vh;
 }
footer{
	 background-color: #000;
	 width:100%;
	 color:white;
	 height: 30vh;
	 bottom	:5px;
 
 }
 footer h2{
 position:absolute;
 left:45%;
 }
  footer p{
 position:absolute;
 right:78%;
 color:orange;
  }
 .navbar{
	 background:lightblue;
	 position:relative;
	 text-align:right;
	 height:30px;
 }
  .navbar a{
	  position:relative;
	   color:black;
	   text-decoration:none;
	   margin-right: 20px;
	   padding:30px;
  }
   .navbar a:hover{
	   color:blue;
	    background-color:orange;
   }
   
   .home{
	   
	   }
	   .home img{
		   
		    width:100%;
			hight:100px;
	   }
 
	    
 </style>
</head>
<body>
<div class="header">
<h2><marquee>   <h1 class="main">WELCOME TO <span style="color:green">ETHIOPIAN</span>
	<span style="color:yellow">SKYLIGHT</span>
<span style="color:red">HOTEL</h1><br>
</marquee></h2>
</div>
</header>
<div class="navbar">
<a href="Home.php"></a>
<a href="Homepage.php">Homepage</a>
<a href="Service.php">Service</a>
<a href="About.php">About</a>
<a href="Admin.php">Admin</a>
<a href="Gallery.php">Gallery</a>
<a href="Contact us.php">Contact us</a>
<a href="booking.php">Booking</a>
</div>
<div class="home"> <a href="#">
<img src="grosery.webp"width="700px" height="500px" title="Gallery"></a>
</div><br>
<div>

 <br>
</head>
<body>
<div class="container">
<div class="content">
<h3>Hi, <span>admin</span></h3>
<h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
<p>this is an admin page</p>
<a href="login.php" class="btn">login</a>
<a href="register.php" class="btn">register</a>
<a href="logout.php" class="btn">logout</a>
</div>
</div>
	<div>
	<footer>
<div class="footer">
<h2>@follow me:-In google:tekaligntekle63@gmail.com.<br>-In facebook:@tokicho man.<br>-In Telegram:@Tekalign Tekle.<br>-In instegram:@tokicho tekle.<br>-contact me:+2519xxxxxx.</h2>
<p>Designed by:Tekalign Tekle.<br>Wachemo University Third Year Software Enginnering student sence 2015 E.C.</p>
</div>
</div>
</footer>
 
</body>
</html>