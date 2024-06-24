<?php 
include "connection.php";
$id=$_GET['id'];
$delete="delete from upload_item where id='$id'";
$dq=mysqli_query($con,$delete);
if ($dq) {
	header('location:upload_form.php');
}
else{
	echo "recorde not deleted";
}
echo"hello";
?>