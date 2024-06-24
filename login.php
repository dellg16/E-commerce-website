<?php 
include("connection.php");
?>
<html>
<head>

<title> login </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	body{
background:gainsboro;
	}


.formdiv{
			position: relative;
			left: 500px;
			top: 90px;
			width: 470px;
			height: 350px;
background-image: url("mage.jpg");
			background-size: 100%;
			background-size: 100%;
			box-shadow: 1px 1px 1px 2px gray;

		}
		.info{
			text-align: center;
			position: relative;
			top: 45px;
			font-size: 22px;
		}
		input{
			width: 200px;
			height: 30px;
			font-size: 15px;
			outline: none;
		}
		h2{
	color:balck;
	text-shadow: 2px 2px 2px red;
	font-size: 44px;
}
#btn1{
	background: blue;
	color: white;
	position: relative;
	left: -60px;
	top: 43px;
	width: 100px;
	height: 30px;
	font-size: 15px;
}
#btn1:hover{
	background:gray;
}
#btn{
	background: green;
	color: white;
	position: relative;
	top: -10px;
	left: 68px;
	width: 100px;
	height: 30px;


}
#btn:hover{
	background:gray;
}
#em{
	font-size: 25px;
	
}
a{
	color: white;
	text-decoration: none;
}

	</style>


</head>
<body>
	
	<div class="formdiv">
	<form action="login.php" method="POST">
		<div class="info">
		<h2>Login</h2>
		<i class="fa fa-envelope"style="font-size:20px" id="em"></i>
	<input type="text" name="email" placeholder="Enter Email id" required><br><br>
	<i class="fa fa-lock" style="font-size:30px" id="pa"></i>
	<input type="password" name="pass" placeholder="Enter password" required><br><br>
	<button id="btn1"><a href="rucha.php">cancel</button></a><br><br>
	<input type="submit" name="submit" id="btn" value="Login"><br><br>
</div>
	<form>
	</div>
  </body>

  <?php 
  if (isset($_POST['submit'])) {
$email=$_POST['email'];
$pass=$_POST['pass'];
$select="select * from login where username='$email' && Password='$pass'";
$sq=mysqli_query($con,$select);
$total=mysqli_num_rows($sq);
if ($total) {
	
	}
	else{
		header('location:upload_form.php');
	}
}
  ?>
</html>