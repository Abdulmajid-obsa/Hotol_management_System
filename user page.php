<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['user_name'])){
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta htt-equiv="x-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user page</title>
	 <!--custom css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<div class="content">
<h3>Hi, <span>user</span></h3>
<h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
<p>this is an user page</p>
<a href="login.php" class="btn">login</a>
<a href="registers.php" class="btn">register</a>
<a href="logout.php" class="btn">logout</a>
</div>
</div>
</body>
</html>