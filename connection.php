<?php 
$server="localhost";
$user="root";
$pass="";
$dbname="projectsy";
$con=mysqli_connect($server,$user,$pass,$dbname);
if ($con) {
	//echo "connection ok !";
}
else{
	echo "connection not !";
}
?>