 <html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html, body {
  height: 100%;
  width: 100%;
  margin: 0;
  font-family: 'Roboto', sans-serif;
  background-color:yellowgreen;

}
 
.container {
  max-width: 1100px;
  height: 500px;
  margin-top:50px;
  margin-left: 100px;
  padding: 15px;
  display: flex;
  border: 2px solid black;
  backgound-color: grey;
}
.left-column {
  width: 65%;
  position: relative;
}
 
.right-column {
  width: 35%;
  margin-top: 60px;
}
.left-column img {
  width: 80%;
  position: absolute;
  left: 0;
  top: 0;
  border: 2px solid black;
  height: 100%;
}
.product-description {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}
.product-description span {
  font-size: 32px;
  color:rebeccapurple;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-decoration: none;
  height: 200px;
}
.product-description h1 {
  font-weight: 300;
  font-size: 52px;
  color:red;
  letter-spacing: -2px;
}
.product-description p {
  font-size: 16px;
  font-weight: 300;
  color:red;
  line-height: 24px;
}
mark{
  background: none;
  color:black;
  font-size: 23px;
}
.checked {
  color: orange;
}
#pp{
  color: white;
}

#btn{
   font-size: 20px;  
  color:white;
  background:blue;
  
}
#btn:hover{
  background:darkgreen;
}
a{
  color: white;
}

</style>
  </head>
  <?php

  include("connection.php");
  error_reporting(0);
  $name=$_GET['name'];
  $price=$_GET['price'];
  $info=$_GET['info'];
  $img=$_GET['img'];

  ?>
<body>
<div class="container">
  <div class="left-column">
    <?php echo $img;?>
  </div>
  <div class="right-column">
    <div class="product-description">
      <h1>name:<?php echo $name;?></h1>
      <span id="pp">price: <?php echo $price;?></span>
      <p><mark> information:<?php echo $info;?> </mark></p>
      
    </div>
    <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<br><br>
    <a href="checkout.php?pricee=<?php echo $price;?>& Name=<?php echo $name;?>& img=<?php echo $img; ?>& info=<? echo $info;?>"><button id="btn"><i class="fa fa-shopping-cart"> By Now</a></button></i>
    

</body>

</html>