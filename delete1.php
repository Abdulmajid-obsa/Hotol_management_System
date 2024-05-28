<?php
include("config.php");
 
$query = "DELETE FROM user_form ";
$data = mysqli_query($conn,$query);
if($data)
{
//echo "Record Deleted";
}
else{
echo "failed to delete";
}
?>