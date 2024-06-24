<?php 

include("connection.php");

?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    #main{
      width: 600px;
      height: 600px;
      background: #dfdfdf;
      position: relative;
      left: 550px;
      border: 2px solid grey;
    background-image: url('background-3.jpg');
    }
    h2{
      color: red;
      text-align: center;
      font-size: 32px;
      margin: 28px;
      position: relative;
      top: 60px;
    }
    .col-25 {
  -ms-flex: 25%;
  flex: 25%;
}
    input{
      width: 300px;
      height: 30px;
      position: relative;
      left: 150px;
      top: 60px;
    }
    #Quantity{
      width: 300px;
      height: 30px;
      position: relative;
      left: 150px;
      top: 60px;
    }
    span{
      position: relative;
      left: 150px;
      top: 60px;
      font-size: 20px;
    }
    #n{
      display: none;
    }
    #p{
      display: none;
      color: white;
    }
    #s{
      background-color: blue;
      color: white;
      font-size: 18px;
      position: relative;
      left: 250px;
      top: 70px;

    }
    #s:hover{
      background-color:skyblue;
      color: black;
      font-size: 20px;
    }
    a{
      color: white;
    }
     #r{
      background-color: blue;
      color: white;
      font-size: 18px;
      position: relative;
      left: 300px;
      top: 70px;

    }
    #r:hover{
      background-color:skyblue;
      color: black;
      font-size: 20px;
    }
    a{
      color: white;
    }
    .container{
      margin: 150px;
    }
    .col-25 {
    margin-bottom: 20px;
  }
  #cc{
    position: relative;
    left:-600px;
  }
  #mm{
    position: relative;
    left:800px;
    top: 7px;

  }
  .name{
    position: relative;
    top: -40px;

  }
  .price{
      position: relative;
    top: -40px;
    left: 200px;


  }
  .price1{
     position: relative;
    top: 110px;
    left: 500px;

  }
  lable{
     position: relative;
    top: 130px;
    left: 290px;
    font-size:19px ;

  }
  #ii{
    position: relative;
    left:-600px;
    top: 30px;
  }
  #pp{
     position: relative;
    left:400px;
    top: 10px;
  }
  span.price {
    float: right;
  color: grey;
}
#sr{
  background: blueviolet;
  position: relative;
  font-size: 15px;
  top: 150px;
  color: white;
}
.name{
  position: relative;
  left: 2px;
}
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
}
  </style>
</head>
<?php
include ('connection.php');
error_reporting(0);
$price=$_GET['pricee'];
$img=$_GET['img'];
$info=$_GET['info'];
$name=$_GET['Name'];
?>
<body>
<div id="main">
<form action="checkout.php" method="POST">
  <h2>Billing Form</h2>
  <input type="text" name="n" id="n" value="<?php echo $name;?>">
  <input type="text" name="p" id="p" value="<?php echo $pricee;?>">
<span>Full Name</span><br><input type="text" name="Fullname" id="Fullname"><br><br>
<span>Email</span><br><input type="text" name="Email" id="Email"><br><br>
<span>Address</span><br><input type="text" name="Address" id="Address"><br><br>
<span>City</span><br><input type="text" name="City" id="City"><br><br>
<span>Quantity</span><br><select name="Quantity" id="Quantity">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
</select><br><br><br>
<button id=s onclick="alert('Your record Placed successfully.')">submit</button>
<button id=r>cancel</button></a>
</form>
<div class="col-25">
    <div class="container">
      <h4 id="cc">Cart <span id="mm" class="price"><i class="fa fa-shopping-cart"></i><b>1</b></span></h4>
      <span id="ii"><?php echo $img;?></span>
       <span class="name"><?php echo $name;?></span>
       <span class="price">Price<br><?php echo $price;?></span>
      <lable>Total price</lable><span class="price1"><?php echo $price;?></span>
      <span ><?php echo $info;?></span>
      <button id="sr"onclick="alert('Your Order Placed Succesfully , Click on ok to continue shopping.')"><a href="show.php">Pay</a></button>
    </div>
  </div>
</div>
</body>
</html>

<?php 
$id=0;
$n=$_POST['n'];
$Fullname=$_POST['Fullname'];
$p=$_POST['p'];
$Email=$_POST['Email'];
$Address=$_POST['Address'];
$City=$_POST['City'];
$Quantity=$_POST['Quantity'];
$fname=$_FILES['$img']['name'];
$tname=$_FILES['$img']['tmp_name'];
$folder='item_img/'.$file;
move_uploaded_file($tmpname, $folder); 
$in="insert into orders values(0,'$Fullname','$Email','$Address','$City','$Quantity','$n','$p','$folder')";
$iq=mysqli_query($con,$in);
if ($iq) {
  
  
}
else
{
  echo "not inserted";
}
?>