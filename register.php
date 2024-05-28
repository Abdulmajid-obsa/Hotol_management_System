<?php
@include 'config.php';
if(isset($_POST['submit'])){
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pass = md5($_POST['password']);
	$cpass = md5($_POST['cpassword']);
	$user_type = $_POST['user_type'];
	$select = " SELECT * FROM user_form WHERE email = '$email' &&password = '$pass' ";
	$result = mysqli_query($conn, $select);
	if(mysqli_num_rows($result) > 0){
		$error[] = 'user already exist!';
	}else{
if($pass != $cpass){
	$error[] = 'password not matched!';
}else{
	$insert = "INSERT INTO user_form(name,email,password,user_type) VALUES('$name','$email','$pass','$user_type')";
	mysqli_query($conn, $insert);
	header('location:login.php');
}
	}		
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta htt-equiv="x-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
	  <!--custom css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
<form action="" method="post">
<h3>register now</h3>
<?php
if(isset($error)){
	foreach($error as $error){
		echo '<span class="error-msg">'.$error.'</span>';
	};
};
?>
<input type="text" name="name" required placeholder="enter your name">
<input type="email" name="email" required placeholder="enter your email">
<input type="password" name="password" required placeholder="enter your password">
<input type="password" name="cpassword" required placeholder="confirm your password">
<select name="user_type">
<option value="user">user</option>
<option value="admin">admin</option>
</select>
<input type="submit" name="submit" value="register now" class="form-btn">
<p>already have an account? <a href="login.php">login now</a></p><br>
 <p><a href="Homepage.php">logout</a></p>
</form>
</div>
</body>
</html>

<?php
require_once('config.php');
$query = "select * from user_form";
$result = mysqli_query($conn,$query);
/*
require_once ('config.php');
require_once ('admin.php');
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
		background-color:dodgerblue;
		text-align:center;
	}
	 *{
	 margin:0;
	 padding:15px;
	 }
	 table{
		 	 margin- top:15px;
			 width:20px;
	 }
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
	<table class="table table-bordered text-center"border=1>
	<tr class="bg-dark text-white">
	<td>name</td>
	<td>email</td>
	<td>password</td>
	<td>user_type</td>
	<td>edit</td>
	<td>delete</td>
	</tr>
	<tr>
	 <?php
	 while($row = mysqli_fetch_assoc($result))
	 {
	 ?>
	 <td><?php echo $row['name']; ?></td>
	  <td><?php echo $row['email']; ?></td>
	   <td><?php echo $row['password']; ?></td>
	    <td><?php echo $row['user_type']; ?></td>
			<td><a href= 'edit1.php?name=$result[name]'><input type='submit' value='edit' class='edit'>edit</a></td>
		<td><a href= 'delete1.php?name=$result[name]'><input type='submit' value='delete' class='delete'>delete</a></td>
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
	</body>
	</html>