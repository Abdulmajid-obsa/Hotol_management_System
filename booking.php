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
		$query = "DELETE FROM username WHERE id = '$id' ";
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
    <input type="submit" name="submit" value="add user"><br>
	<p><a href="Homepage.php">back</a></p>
</form>
<?php
require_once('config2.php');
$query = "select * from username";
$result = mysqli_query($conn,$query);

/*require_once ('config1.php');
require_once ('Contact us.php');
$result = display_data();
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta htt-equiv="x-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch data from database in php</title>
	<style>
body{
		background-color:white;
		text-align:center;
	}
	 *{
	 margin:0;
	 padding:15px;
	 }
	 table{
		 	 margin- top:15px;
			 width:20px;
 </style>
	</head>
	<body class="bg-dark">
	<div class="container">
	<div class="row mt-5">
	<div class="col">
	<div class="card mt-5">
	<div class="card-header">
	<h2 class="display-6 text-center">Fetch data from database in php</h2>
	</div>
	<div class="card-body">
	<div bgcolor="red" align="center">
	<table class="table table-bordered text-center" border=1>
	<tr class="bg-dark text-white">
	<td>id</td>
	<td>name</td>
	<td>password</td>
	<td>age</td>
	<td>email</td>
	<td>edit</td>
	<td>delete</td>
	</tr>
	<tr>
	 <?php
	 while($row = mysqli_fetch_assoc($result))
	 {
	 ?>
	 <td><?php echo $row['userid']; ?></td>
	  <td><?php echo $row['username']; ?></td>
	   <td><?php echo $row['password']; ?></td>
	    <td><?php echo $row['age']; ?></td>
		    <td><?php echo $row['email']; ?></td>
		<td><a href="#" class="btn btn-primary">edit</a></td>
		<td><a href= 'delete.php?id=$result[id]'> <input type='submit' value='delete' class='delete'>delete</a></td>
 </tr>
	 <?php
	 }
	 ?>
	</table>
	</div>
	</div>
	</div>
	</div>
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