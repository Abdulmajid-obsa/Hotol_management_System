<!DOCTYPE html>
<html>
<head>
<title>Frameset</title>
<link rel="stylesheet" type="text/css" href="style.css";
<style>
#myHeader{
	background-color:Dodgerblue;
	color: black;
	padding:20px;
	text-align:center;
	border-radius:30px;
}
body{
	background-image:url("skylight");
	background-repeat:no-repeat;
	background-size:cover;
}
header{
	top: 0;
	right: 0;
	width: 100;
	padding: 25px; ;
	background:red;
	display:flex;
	justify-content:space-between;
	text-align:center;
}
.logo{
	float:left;
	margin-top: 0.008em;
	border:radius 2px;
}
ul{
	display: black;
	list-style-type:none;
	background-color:green;
	overflow:hidden;
}
li a{
	color:black;
	display:flex;
	padding:20px;
	text-align:center;
}
li{
	float:row;
}
li a:hover{
	background-color:red;
	padding:-20px;
}
</style>
</head>
<body>
<ul>
<h1 id="myHeader">shabalala hotel</h1>
<div class="logo">
<a href="home.html"><img src= "skylight.webp" title="center"></a>
</div>
</ul>
<header class="header1">
<nav class="navbar">
<li><a href="signup.php">signup</a></li>
<li><a href="service.php">service</a></li>
<li><a href="booking.php">booking</a></li>
<li><a href="admin.php">admin</a></li>
<li><a href="register.php">register</a></li>
</nav>
</header>
</body>
</html>
