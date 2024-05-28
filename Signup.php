<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta htt-equiv="x-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
 <style>
 body{
	 font-family: verdana;
	background-repeat:no-repeat;
	background-image:url("images1.jpg");
	background-size:cover;
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
			.form-container{
	min-height: 100vh;
	display: flex;
	align-items: center;
	justify-content: center;
	padding:20px;
	padding-bottom: 60px;
	background: #eee;
}
.form-container form{
padding:20px;
border-radius: 5px;
box-shadow: 0 5px 10px rgba(0,0,0,.1);
background: #fff;
text-align: center;
width: 500px;
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
 
</div>
<div style="background-color:orange; text-align:center; width=35px;">
        <h1>Signup</h1>
        
        <form action="homepage.php" method="post">
            
		<input type="text" name="name" required placeholder="enter your name"><br>
<input type="email" name="email" required placeholder="enter your email"><br>
<input type="password" name="password" required placeholder="enter your password"><br>
<input type="password" name="cpassword" required placeholder="confirm your password"><br>
 
<input type="submit" name="submit" value="submit" class="form-btn">
			 </form>	 
 </div>
</body>
</html>