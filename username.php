<?php
include('config2.php');
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
   // $pass=$_POST['pass'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    if($id !="" || $name !="" || $pass !="" || $age !="" || $email !="" ){
        $sql="insert into username (userid,username,age,email) values('$id','$name','$age','$email')";
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
        <title>The registration Form</title>
</head>
<body>
<div>Bookng form</div>
<form action="" method="POST">
    user ID:</br>
    <input type="text" name="id" placeholder="enter id"></br>
    user Name:</br>
    <input type="text" name="name" placeholder="enter name"></br>
    user Password:</br>
    <input type="password" name="Password" placeholder="enter pass"></br>
    user Age:</br>
    <input type="text" name="age" placeholder="enter age"></br>
    user Email:</br>
    <input type="text" name="email" placeholder="enter email"></br>
    <input type="submit" name="submit" value="add user">
</form>
</body>
</html>