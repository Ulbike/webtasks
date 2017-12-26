<html>
<head>
<style>
body{
font-family:lucida grande, tahoma, verdana, arial, sans-serif;
background-color: #e9e9e9;
}
body p{
font-size:0.8em;
line-height: 1.28;}
#wrapper{
width:1080px;  
background-color:white;  
margin:0 auto;  
padding:10px; 
border:5px solid #dedede;
}
input[type=text] {
    width: 130px;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('img/searchicon.png');
    float: left;
	background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
#qw{
color:white;
}

input[type=text]:focus {
    width: 40%;
}
#login{
height: 50px;
border: 3px solid #E3E3E3;
margin-top: 0.5px;
text-shadow: 0.1em 0.1em #333;
background-image: url("img/banner3.jpg");
}
#login a{
font-size: 24px;
float: right;
position: relative;
width:155px;
height:50px;
color: white;
}
#login a:hover{
color: lightblue;
}

#banner img{
border: 5px solid # dedede;
height: 250px;
width: 100%;

}
#content_area{


}

footer{ 
clear: both;
width:auto;
height: 40px;
padding: 10px;
border: 3px solid #E3E3E3;
text-align:center;
color:#fff;
text-shadow: 0.1em 0.1em #333;
background-image: url("img/banner3.jpg");
}
#navigation{
height: 60px;
border: 3px solid #E3E3E3;
margin-top: 20px;
text-shadow: 0.1em 0.1em #333;
background-image: url("img/banner3.jpg");
}
#nav{
list-style: none;
}
#nav ul{
margin:0;
padding:0;
width: auto;
display: none;
}
#nav li{
font-size: 24px;
float: left;
position: relative;
width:180px;
height:50px;
}
#nav a: link, nav a:active,nav a :visited{
display: block;
color:white;
text-decoration: none;
}
#nav a:hover{
color: lightblue;
}
#nav a{
text-decoration: none;
color: white;
}
#a{font-size: 20px;}
#slide{
width: 850px;
height: 550px;
margin-top: 30px;
margin-left: 100px;
}
#uniquename{
margin-top: 30px;
margin-left: 100px;
font-size: 25px;
}
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;margin:0}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}

</style>

</head>
<body>
<div id = "wrapper">
<div id ="login">
<form>
  <input type="text" name="search" placeholder="Search..">
</form>
<a href = "Login.php">Login</a><a href = "Registration.php">Registration/</a>
</div>
<div id="banner">
<img src = "img/coffee.jpg">
</div>

<nav id ="navigation">
<ul id="nav">
<li><a href ="Home.php">Home</a></li>
<li><a  href ="Coffee.php">Coffee</a></li>
<li><a href ="Shop.php">Shop</a></li>
<li><a href ="About.php">About</a></li>
<li><a href ="Adminpage.php">Admin page</a></li>
</nav>

<div id ="content_area">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="https://media.timeout.com/images/102997799/image.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="https://media-cdn.tripadvisor.com/media/photo-s/08/4f/31/ad/the-best-coffee-place.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="img/8.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="https://dakiniland.files.wordpress.com/2013/05/coffee-shop1.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
</div>
<!--<img src="img/6.jpg" id="slide" onclick="nextslide()">-->
<p id ="a">

Every year, we travel the globe to find the finest coffee available. We'll try hundreds of samples from any one country. Then, we select the most spectacular coffees to bring home to you.
Our company's size is perfect for sourcing the best of each country's crop. We're able to bring in special coffees that might otherwise be out of the small roaster's reach or too limited in supply for the large roaster.</p>
<p style="font-size:15px"><a href="javascript:ShowContent('uniquename')">Show More Informations</a></p>
<div id="uniquename" style="display:none;">
<p>Variations of the drink involve the use of cream instead of milk, and flavoring with cinnamon or chocolate powder. It is typically smaller in volume than a caffè latte, with a thicker layer of micro foam.

The name comes from the Capuchin friars, referring to the colour of their habits and in this context referring to the colour of the beverage when milk is added in small portion to dark, brewed coffee (today mostly espresso). The physical appearance of a modern cappuccino with espresso créma and steamed milk is a result of a long evolution of the drink.

The Viennese bestowed the name "Kapuziner" possibly in the 18th century on a version that included whipped cream and spices of unknown origin. The Italian cappuccino was unknown outside Italy until the 1930s, and seems to be born out of Viennese-style cafés in Trieste and other cities in the former Austria in the first decades of the 20th century. The drink has since spread worldwide and can be found at a number of establishments.</p>
<br style="font-size: 20px" >ONLINE CUSTOMER SERVICE </br>
<p style= "font-size :20px" >If you’d like to place an order over the phone or have questions regarding your adidas.com order
8AM ET – 11PM ET, 7 days a week
800-982-9337 </p>
<p style="font-size:15px"><a href="javascript:HideContent('uniquename')">
Hide Informations
</a></p>
</div>

<footer> 
<p>All rights reserved</p> 
</footer>
</div>
</div>
<script>
         var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
<!--
		 
function HideContent(d) {
document.getElementById(d).style.display = "none";
}
function ShowContent(d) {
document.getElementById(d).style.display = "block";
}
function ReverseDisplay(d) {
if(document.getElementById(d).style.display == "none") { document.getElementById(d).style.display = "block"; }
else { document.getElementById(d).style.display = "none"; }
}
-->
</script>
</body>
</html>