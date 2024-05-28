<?php
$conn=new mysqli("localhost","root","","maths");
//$conn =mysqli_connect($host,$username,$email,$message,'maths');
if($conn->connect_error){
    die("connection filed:" .$conn->connect_error);
}
echo"connected successfully";
?>