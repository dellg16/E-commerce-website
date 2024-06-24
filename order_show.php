<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<table border="" width="100%">
	<tr>
		<th>id</th>
		<th>Fullname</th>
		<th>Email</th>
		<th>Address</th>
		<th>City</th>
		<th>Quantity</th>
		<th>n</th>
		<th>p</th>
		<th>Delete</th>
		<th>Edit</th>
		<th>Bill</th>

	</tr>
<?php 
include("connection.php");
$s="select * from orders";
$sq=mysqli_query($con,$s);
while ($f=mysqli_fetch_array($sq)) {

?>
	<tr>
		<th><?php echo $f['id'];?></th>
		<th><?php echo $f['Fullname'];?></th>
		<th><?php echo $f['Email'];?></th>
		<th><?php echo $f['Address'];?></th>
		<th><?php echo $f['City'];?></th>
		<th><?php echo $f['Quantity'];?></th>
		<th><?php echo $f['n'];?></th>
		<th><?php echo $f['p'];?></th>
		<th><a href="dele.php?id=<?php echo $f['id'];?>"><button id="delete">Delete</button></th>
		
		<th><a href="editsh.php?id=<?php echo $f['id'];?>& Fullname=<?php echo $f['Fullname'];?> &Email=<?php echo $f['Email'];?>&Address=<?php echo $f['Address']; ?>& City =<?php echo $f['City'];?> &Quantity=<?php echo $f['Quantity'];?>"><button id="Edit">Edit</button></a></th>
		
		<th><a href="bill_pdf.php"><button>click  me</button></a></th>
	</tr>

	<?php 
}
?>
</table>
</body>
</html>