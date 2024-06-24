<?php 
include("connection.php");
error_reporting(0);
?>
<html>
<head>

<title> login </title>
<style>
	body{
		background:greenyellow;
	}
#main{
	background: white;
	width: 500px;
	height: 550px;
	background:cadetblue;
	position: relative;
	left: 450px;
	top: 5px;
}
span{
	position: relative;
	top: 5px;
	left: 70px;
}
h2{
	color:balck;
	text-shadow: 2px 2px 2px red;
	font-size: 44px;
	text-align: center;
}
input{
	position: relative;
	top: 10px;
	left: 70px;
	width: 250px;
	height: 25px;
	}
	#cancel{
		position: relative;
	top: 40px;
	left: 40px;
	width: 100px;
	height: 30px;
	background: blue;
	}
	#cancel:hover{
		background:skyblue;
	}
	#submit{
			position: relative;
	top: 40px;
	left: 150px;
	width: 100px;
	height: 30px;
	background: red;
	}
	#submit:hover{
		background: deeppink;
	}
	a{
		color: white;
	}
</style>
<body>

<div id="main">
	<form action="register.php" method="POST">
		<h2>Registration form</h2>
	<span>Username :</span><br><input type="text" name="username" placeholder="Username"><br><br>
	<span>Email id :</span><br><input type="email" name="email" placeholder="Email id"><br><br>
	<span>Password :</span><br><input type="password" name="Password" placeholder="Password"><br><br>
	<span>Address :</span><br><input type="text" name="Address" placeholder="Address"><br><br>
	<span>County :</span><br><input type="text" name="County" placeholder="County"><br><br>
	<span>Mobile No :</span><br><input type="number" name="number" placeholder="Mobile Number"><br><br>
	<button id="cancel"><a href="rucha.php">cancel </button></a><button id="submit"><a href="rucha.php">submit</button></a>
	</form>
</div>
	</body>
	</html>

	<?php
$username=$_POST['username'];
$email=$_POST['email'];
$Password=$_POST['Password'];
$Address=$_POST['Address'];
$County=$_POST['County'];
$number=$_POST['number'];

$in="insert into login values(0,'$username','$email','$Password','$Address','$County','$number')";
$iq=mysqli_query($con,$in);
if ($iq) {
  echo " okk successful";
}
else{
	echo "so sad";
}
?>