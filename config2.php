<?php
$conn=new mysqli("localhost","root","","education");
//$conn =mysqli_connect($host,$username,$age,$department,'UserReg');
if($conn->connect_error){
    die("connection filed:" .$conn->connect_error);
}
 
?>