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
width: 25%;
height: 250px;
background:#fafafa;
margin: 20px;
box-sizing: border-box;
font-size:20px ;
border:2px solid grey;
}
#item{
	position: relative;
	left: 0px;
	width: 305px;
	
}
#item:hover{
			height: 148px;
			width: 302px;
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
 font-size: 30px;
 z-index: 200;
 position: relative;
 top: 80px;
 color: black;
}
#namedata{
 font-size: 20px;
 z-index: 200;
 position: relative;
 top: 20px;
 left: 100px;
 color:red;
}
#pricedata{
 font-size: 20px;
 z-index: 200;
 position: relative;
 top: 20px;
 left: 100px;
 color:blue;
}


#show_item{
	background: green;
color: white;
}
	</style>
</head>
<body>
	<div class="container">
	
		<?php 
     $s="select * from upload_item";
     $sq=mysqli_query($con,$s);
    while($f=mysqli_fetch_array($sq)){
		?>
	<div class="box">
		
		<?php echo "<img  id='item' src='".$f['image']."' width='290' height='150'>" ?>
		
		<?php echo "<div id='namedata'>Name :".$f['name']."</div>";?>
		<?php echo"<div id='pricedata'>Price :".$f['price']."</div>";?>
		 <?php  $f['information'];?>
		<br><br>
<a href="information.php? name=<?php echo $f['name'];?>& price=<?php echo $f['price'];?>& img=<?php echo "<img  id='item'src='".$f['image']."' width='290' height='150'>" ?>& info= <?php echo $f['information'];?>"><button id="show_item">show Data</button></a>
		

	</div>
<?php 
}
?>
</div>
</body>
</html>