<?php
include("config1.php");
 
$query = "select * from subtract";
$data = mysqli_query($conn,$query);
if($data)
{
echo "Record Deleted";
}
else{
echo "failed to delete";
}
?>