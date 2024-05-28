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
<div style="text-align:center; bgcolor:red">
        <h1>Signin</h1>
        
        <form action="homepage.php" method="post">
            
            <label for="fName">
               FirstName
                <input type="text" class="form-control" id="name" name="firstname"><br>
            </label>
            <label for="lname">
               LastName
                <input type="text" class="form-control" id="name" name="lastname"><br>
            </label>
            <label for="email">
                Email
                <input type="text" class="form-control" id="name" name="email"><br>
            </label> 
            <label for="password">
                Password
                <input type="password" class="form-control" id="password" name="password"><br>
            </label>
      <input type="submit" name="submit" value="submit" class="form-btn">
			 </form>
			 <a href="signup.php">signup</a>
			 		 <script>
	document.getElementById("signup").innerhtml=form;
	</script>
 </div>
</body>
</html>