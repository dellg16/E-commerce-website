<?php 

include "connection.php";
$id=$_GET['id'];
$Fullname =$_GET['Fullname'];
$Email =$_GET['Email'];
$Address=$_GET['Address'];
$City=$_GET['City'];
$Quantity=$_GET['Quantity'];
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		body{
			
		}
		#formdiv{
			position: relative;
			left: 480px;
			top: 70px;
			width: 600px;
			height: 650px;
			background-size: 100%;
			background-color: skyblue;

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
		#fff{
			position: relative;
			left: 150pxtop: 5px;
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
   #cancel{
   	position: absolute;
   	left: 360px;
  		  width: 100px;
          height: 30px;
          background: red;
          color: whitesmoke;
   }
   h2{
   	text-align: center;
   	color: darkblue;
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
#btn{
	position: relative;
	left: 250px;
	background: red;
	color: white;
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
		<form action="editsh.php" method="POST" enctype="multipart/form-data"><br><br><br>
			<h2>Order_Show</h2>
		<input type="text" id="id" name="id" value="<?php echo $id;?>" >
			<br><br>

		<label id="fff">Fullname :</label><br><br>
		<input type="text" name="Fullname"  id="Iname"value="<?php echo $Fullname;?>" required><br><br>

		<label>Email:</label><br><br>
		<input type="text" name="Email" id="price"value="<?php echo $Email;?>"required><br><br>

		<label>Address:</label><br><br>
		<input type="text" name="Address"id="add" value="<?php echo  $Address;?>" required><br><br>

		<label>city:</label><br><br>
		<input type="text" name="City" id="cc"value="<?php echo $City;?>" required><br><br>

                <label>Quantity:</label><br><br>
                <input type="text" name="Quantity" id="quan"value="<?php echo  $Quantity;?>" required><br><br><br><br>
                 <button id=btn>Submit</button>

		</form>
	</div>
	
</div>
</body>
</html>
<?php

	
$id=$_POST['id'];
$Fullname=$_POST['Fullname'];
$Email=$_POST['Email'];
$Address=$_POST['Address'];
$City=$_POST['City'];
$Quantity=$_POST['Quantity'];
$file=$_FILES['file']['name'];
$tmpname=$_FILES['file']['tmp_name'];
$folder='item_img/'.$file;
move_uploaded_file($tmpname, $folder);
if (!$Fullname==""&& !$Email==""&& !$Address==""&& !$City==""&& !$Quantity==""&& !$folder=="") {
	$up="update orders set fullname='$Fullname',Email='$Email',Address='$Address',City='$City',Quantity='$Quantity',image='$folder' where id='$id'";
$uq=mysqli_query($con,$up);
if ($uq) {
	header('location:order_show.php');
}
else{
echo "data not insert into database!";
}
}
else{
      
}


	?>

