<?php
include("config.php");
 
$query = "EDIT FROM user_form ";
$data = mysqli_query($conn,$query);
if($data)
{
echo "Record edit";
}
else{
echo "failed to edit";
}
?>