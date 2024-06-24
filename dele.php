<?php 
include "connection.php";
$id=$_GET['id'];
$delete="delete from orders where id='$id'";
$dq=mysqli_query($con,$delete);
if ($dq) {
	header('location:checkout.php');
}
else{
	echo "recorde not deleted";
}
echo"hello";
?>