<?php 
include "connection.php";
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		body{
			background: #d6d6d6;
		}
		#formdiv{
			position: relative;
			left: 390px;
			top: 100px;
			width: 600px;
			height: 400px;
			background-image: url("istockphoto-1312991431-170667a.jpg");
			background-size: 100%;
			box-shadow: 2px 2px 2px 2px gray;

		}
		label{
			position: absolute;
                     font-size: 20px;
			left: 150px;
			color:#02744efa;
		}
		#namellabel{
			position: relative;
			top: -20px;
		}
		input{
			position: absolute;
			left: 150px;
			width: 308px;
			height: 30px;
			outline: none;
			border: none;
		}
		#rr{
			position: relative;
			top: 10px;
		}
		#price{
			position: relative;
			top: 15px;
			left: 50px;
		}
		#image{
			height: 30px;
			width: 310px;
			background: #b1b1b1;
			position: relative;
			top: 0px;


		}
		::-webkit-file-upload-button{
			background: #02744efa;
			
			height: 30px;
		}
		#titile{
			position: absolute;
			top: 10px;
			left: 200px;
			color: black;
			text-shadow: 2px 2px 2px red;
			font-size: 30px;
		}
		input[type="submit"]{
          width: 100px;
          height: 30px;
          background: green;
          color: white;
           top: 350px;
           border:2px solid black;
		}
   #cancel{
   	position: absolute;
   	left: 360px;
  		  width: 100px;
          height: 30px;
          top: 350px;
          background: red;
          color: whitesmoke;
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
width: 23%;
height: 330px;
background:#fafafa;
margin: 20px;
box-sizing: border-box;
font-size:20px ;
border: 2px solid black;
}
#item{
	position: relative;
	left: 0px;
	width: 301px;

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
#id{
 font-size: 20px;
 z-index: 200;
 position: relative;
 top: 10px;
 color:white;
}
#namedata{
 font-size: 25px;
 z-index: 200;
 position: relative;
 top: -20px;
 left: 100px;
 color:red;
}
#pricedata{
 font-size: 20px;
 z-index: 200;
 position: relative;
 top: -15px;
 left: 100px;
 color:blue;
}

#delete{
background: red;
color: white;
position: relative;
top: -350px;

}
#show_item{
	background: green;
color: white;
position: relative;
top: -350px;
}
#Edit{
	background: blue;
color: white;
position: relative;
top: -350px;
}
#information{
	position: relative;
	left: 60px;
	width: 300px;
	top: -10px;
	height: 50px;
}
#iname{
	position: relative;
	top: 30px;
}
#infor{
position: relative;
	left: 150px;
	width: 310px;
	top: -67px;	
	font-size: 20px;
}
#show{
	position: relative;
	left: 500px;
	top: -10px;
	background: blue;
	color: white;
}
a{
	color: white;
}
mark{
	color:red;
	background: none;
}
#inform{
	width: 300px;
	height: 100px;
	color: grey;
	overflow: hidden;
	overflow: scroll;
}
#abc{
	background:white;
	position: relative;
	left: -68px;
	top: -12px;
	font-size: 15px;
}
#abc:hover{
	color: black;
	background: yellow;
}
a{
	color: black;
}

	</style>
</head>
<body>
<
	<div id="formdiv">
		<form action="upload_form.php" method="POST" enctype="multipart/form-data">
			<br><br><br>
			<label id="titile">Upload New Item</label>

			<label id="namelabel">Item name :</label>
		<input type="text" name="iname" placeholder="Item name" id="Iname" ><br><br>
<br><br>
                <label id="namellabel">Item prize :</label>
		<input type="text" name="price" placeholder="Item price" id="price"><br><br>

			<label id="rr">Item image main :</label><br><br><input type="file" name="file"  id="image" ><br><br><br>
			<label id="infor">Information:</label><textarea name="information" id="information"></textarea><br><br>

			<input type="submit" name="submit" value="upload" id="submit" onclick="confirm('yes/no');">
	<button id="cancel"><a href="register.php">Cancel</button></a>		
	<button id="show"><a href="show.php">Show Order</button></a>
	<button id="abc"><a href="order_show.php">Admin record</button></a>
		</form>
	</div><br><br><br><br><br><br><br><br>
	<div class="container">
		<?php 
     $s="select * from upload_item";
     $sq=mysqli_query($con,$s);
    while($f=mysqli_fetch_array($sq)){
		?>
	<div class="box">
		
		<?php echo "<img  id='item'src='".$f['image']."' width='500' height='150'>" ?>
		<?php echo "<div id='id'> Id :".$f['id']."</div>";?>
		<?php echo "<div id='namedata'>Name :".$f['name']."</div>";?>
		<?php echo"<div id='pricedata'>Price :".$f['price']."</div>";?>
		<?php echo"<div id='inform'><mark>Information : </mark>".$f['information']."</div>";?>
		<br><br>
		<a href="#"><button id="show_item">show </button></a>

		<a href="edit.php?id=<?php echo $f['id'];?>& name=<?php echo $f['name'];?>&price=<?php echo $f['price'];?>&img=<?php echo "<img  id='item'src='".$f['image']."' width='290' height='150'>" ?>"><button id="Edit">Edit</button></a>

		<a href="delete.php?id=<?php echo $f['id'];?>"><button id="delete">Delete</button></a>

	</div>
<?php 
}
?>
</div>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
	

$iname=$_POST['iname'];
$price=$_POST['price'];
$file=$_FILES['file']['name'];
$tmpname=$_FILES['file']['tmp_name'];
$folder='item_img/'.$file;
$information=$_POST['information'];
move_uploaded_file($tmpname, $folder);
if (!$iname==""&& !$price==""&& !$folder=="") {
	$in="insert into upload_item values('0','$iname','$price','$information','$folder')";
$iq=mysqli_query($con,$in);
if ($iq) {
	
}
else{
echo "data not insert into database!";
}
}
else{

}

}
	?>

