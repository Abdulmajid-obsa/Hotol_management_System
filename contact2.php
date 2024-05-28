<?php
include('config1.php');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
   // $password=$_POST['password'];
    $message=$_POST['message'];
    if($name !="" || $email !="" || $pass !="" || $message !="" ){
        $sql="insert into subtract (username,email,message) values('$name','$email','$message')";
        $result =mysqli_query($conn,$sql);
        if($result){
            echo "successufully inserted";
        }
        else{
            die(mysqli_error($conn));
        }
}
else{
    echo "All fields can not be empty!";
}
}
?>
<html>
    <head>
        <title> contact us form</title>
</head>
<body>
<h1>Contact us</h1> 
<form action="" method="POST">
    user name:</br>
    <input type="text" name="name" placeholder="enter name"></br>
    user Email:</br>
    <input type="text" name="email" placeholder="enter email"></br>
    user Password:</br>
    <input type="password" name="Password" placeholder="enter pass"></br>
    user feedback:</br>
      <textarea name="message" rows="5" cols="20"placeholder="Please enter your valuable feedback"></textarea>
    <input type="submit" name="submit" value="add user">
</form>
</body>
</html>