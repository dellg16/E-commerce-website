<html>
<head>
	<title> project</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
*{
	margin: 0;
	padding: 0;
	box-sizing :border-box;
}
body{
	font-family: 'Poppins', sans-serif;
}

nav{
	display: flex;
	height: 100px;
	flex-direction: row;
	justify-content:space-between;
	align-item: center;
	padding: 1vw 8vw;
	box-shadow: 2px 2px 10px solid red;
	background-color:Orchid;
}
 nav img{
	width:150px;
	height: 100px;
	position: relative;
	left: -100px;
	background-color:;
	box-shadow: 2px 2px 2px solid red;
	cursor: pointer;
	top: -13px;


}

ul {
  list-style-type: none;
  position: relative;
  left: 100px;
  margin:0;
  padding:0;
  overflow: hidden;
  border: 1px solid white;
  background-color:silver;
}

li {
  float: left;

}

li a {
  display: block;
  color: #666;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;

}

li a:hover {
  background-color:blue;
  color: white;
}
.main{
  width: 100%;
  height: 86%;
  
}

.mySlides {
  position :relative;
  top: 15px;
  left: 100px;
  display:none;
  height: 530px;
  width: -34px;
}
.imgtext {
  position: absolute;
  top: 50px;
  left: 550px;
  font-size: 40px;
  transform: translate(-50%, -50%);
  text-shadow: 5px 2px 2px yellow;
  color:black;
}
.imgtext:hover{
	font-size:41px;
}
* {box-sizing: border-box;}

.mySlides {display: none;}
img {vertical-align: middle;}

.slideshow-container {
  position: relative;
  margin:8px;
  left:30px;
}
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

	</style>
</head>
<body>
	<div class="container">
  <nav>
    <img src="aaaaaa.jpg">
    <div class="imgtext"><b>ASHITA'S COMPUTING PERIPHERALS</b></div>
  <div class="navigation">
<ul>
  <li><a href="rucha.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
  <li><a href="show.php"><i class="fa fa-shopping-cart"></i>shop</a></li>
  <li><a href="login.php"><i class="fa fa-user-secret"></i>Admin</a></li>
  
</ul>
</div>
</nav>

</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="abc.jpg" style="width:80%" "height:20%">
 
</div>

<div class="mySlides fade">
  <img src="Computer-Accessories.jpg" style="width:80%" "height:20%">
</div>

<div class="mySlides fade">
  <img src="rrrrr.jfif" style="width:80%" "height:20%">
</div>
<div class="mySlides fade">
  <img src="maxresdefault.jpg" style="width:80%" "height:20%">
</div>
<div class="mySlides fade">
  <img src="hhhhh.jpg" style="width:80%" "height:20%">
</div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
</div>


<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</div>
</div>
</body>
</html>