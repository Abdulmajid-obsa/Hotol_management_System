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
		background-image:url("wedding.webp");
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
	 <td><?php echo $row['username']; ?></td>
	  <td><?php echo $row['email']; ?></td>
	   <td><?php echo $row['password']; ?></td>
	    <td><?php echo $row['message']; ?></td>
		<td><a href="#" class="btn btn-primary">edit</a></td>
		<td><a href="#" class="btn btn-danger">delete</a></td>
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