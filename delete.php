<?php
include("config2.php");
 
$query = "DELETE FROM username  ";
$data = mysqli_query($conn,$query);
if($data)
{
echo "Record Deleted";
}
else{
echo "failed to delete";
}
?>