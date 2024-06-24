<?php 
include "connection.php";
$id=$_GET['id'];
$priceg =$_GET['price'];
$getname =$_GET['name'];
$image=$_GET['img'];
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		body{
			background: blueviolet;
		}
		#formdiv{
			position: relative;
			left: 480px;
			top: 100px;
			width: 600px;
			height: 400px;
			background-image: url("istockphoto-1312991431-170667a.jpg");
			background-size: 100%;

		}
		label{
			position: absolute;
            font-size: 20px;
			left: 150px;
			color:#02744efa;
		}
		input{
			position: absolute;
			left: 150px;
			width: 308px;
			height: 30px;
			outline: none;
			border: none;
		}
		#image{
			height: 30px;
			width: 308px;
			background: #b1b1b1;


		}
		::-webkit-file-upload-button{
			background: #02744efa;
			
			height: 30px;
		}
		#titile{
			position: absolute;
			top: 10px;
			left: 200px;
		}
		input[type="submit"]{
          width: 100px;
          height: 30px;
          background: green;
          color: whitesmoke;
		}
   #cancel{
   	position: absolute;
   	left: 360px;
  		  width: 100px;
          height: 30px;
          background: red;
          color: whitesmoke;
   }
   #id{
   	width: 50px;
   	height: 50px;
   	position: relative;
   	top: -40px;
   	left: -50px;
   	font-size: 20px;
   }
   .container{
width: 100%;
height: auto;
position: relative;
left: 30px;
display: flex;
flex-direction: row;
justify-content: space-around;
flex-flow: wrap;
}
.box{
width: 20%;
height: 300px;
background:#fafafa;
margin: 20px;
box-sizing: border-box;
font-size:20px ;
}
#item{
	position: relative;
	left: 5px;
}
@media screen and (max-width: 1200px){
	.box{
		width: 40%;
	}
}
@media screen and (max-width: 600px){
	.box{
		width: 90%;
	}
}
}



	</style>
</head>
<body>

	<div id="formdiv">
		<form action="edit.php" method="POST" enctype="multipart/form-data"><br><br><br>
		<input type="text" id="id" name="id" value="<?php echo $id;?>" >
			<br><br>
		<label id="titile">Upload New Item</label>

		<label id="namelabel">Item name :</label><br><br>
		<input type="text" name="iname" placeholder="Item name" id="Iname"value="<?php echo $getname;?>" required><br><br>

		<label>Item price :</label><br><br>
		<input type="text" name="price" placeholder="Item price" id="price"value="<?php echo $priceg;?>"required><br><br>

			<label>Item image main :</label><br><br><input type="file" name="file"  id="image"value="<?php echo  $image;?>" required><br><br><br>

			<input type="submit" name="submit" value="upload" id="submit" 
			>
	<button id="cancel">Cancel</button>		
		</form>
	</div>
	
</div>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
	
$id=$_POST['id'];
$iname=$_POST['iname'];
$price=$_POST['price'];
$file=$_FILES['file']['name'];
$tmpname=$_FILES['file']['tmp_name'];
$folder='item_img/'.$file;
move_uploaded_file($tmpname, $folder);
if (!$iname==""&& !$price==""&& !$folder=="") {
	$up="update upload_item set  name='$iname',price='$price',image='$folder' where id='$id'";
$uq=mysqli_query($con,$up);
if ($uq) {
	header('location:upload_form.php');
}
else{
echo "data not insert into database!";
}
}
else{

}

}
	?>

