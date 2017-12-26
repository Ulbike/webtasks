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
width:135px;
height:50px;
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

width:70vw;

display:flex;
flex-direction:column;

}
#sidebar{
float:right;
width: 250px;
height: 400px;
margin: 20px 10px;
padding: 10px;
border: 2px solid #E3E3E3;
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
color:#fff;
text-decoration: none;
}
#nav a:hover{
color: lightblue;
}
a{
text-decoration: none;
color: white;
}
.txtcontent{
	position: absolute;
	top:0px;
	left:0px;
	background: rgba(12,12,12,.7);
	width: 100%;
	height: 100%;
	 opacity: 0;
	-webkit-transition: opacity 500ms;
  	-moz-transition: opacity 500ms;
  	-o-transition: opacity 500ms;
  	transition: opacity 500ms;
}
#myInput {
  background-image: url('img//css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}
.cards{
  display: flex;
  flex-wrap: wrap;
  align-items: center;

  
}
.card{
  border-radius: 5px;
  border-style:solid;
  border-width: 1px;
  border-color: red;
  margin-left: 1vw;
  margin-right: 1vw;
  margin-top: 2vh;
}
.card{
  display: flex;
  flex-direction: column;
}
.title{
    color:white;
     background-color: #1e90ff;
     text-align: center;
}
.card a{
  text-decoration:none;
}
.card img {
	width: 200;
	height: 200px;
}
.price{
      font-weight:bold;
      padding-left: 50px;
}
.card
{
    
    position: relative;
    -webkit-transition: all 200ms ease-in;
    -webkit-transform: scale(1); 
    -ms-transition: all 200ms ease-in;
    -ms-transform: scale(1); 
    -moz-transition: all 200ms ease-in;
    -moz-transform: scale(1);
    transition: all 200ms ease-in;
    transform: scale(1);   

}
.card:hover
{
    box-shadow: 0px 0px 150px #000000;
    z-index: 2;
    -webkit-transition: all 200ms ease-in;
    -webkit-transform: scale(1.1);
    -ms-transition: all 200ms ease-in;
    -ms-transform: scale(1.1);   
    -moz-transition: all 200ms ease-in;
    -moz-transform: scale(1.1);
    transition: all 200ms ease-in;
    transform: scale(1.1);
}
}
</style>
</head>
<body>
<div id = "wrapper">
<div id ="login">

<a href = "Login.php">Login</a><a href = "Registration.php">Registration/</a>
</div>
<div id="banner">
<img src = "img/coffee.jpg">
</div>

<nav id ="navigation">
<ul id="nav">
<li><a href ="Home.php">Home</a></li>
<li><a href ="Coffee.php">Coffee</a></li>
<li><a href ="Shop.php">Shop</a></li>
<li><a href ="About.php">About</a></li>
<li><a href ="Adminpage.php">Admin page</a></li>
</nav>
<div id ="content_area">
<input class="searcher" style="height:50px" type="text" id="myInput" onkeyup="myFunction()" name="" placeholder="Search...">
		<ul id="myUL"><div class="cards">
    <li><div class="card">
      <a href="Espresso.php" class="title">Espresso</a>
	  
        <img src="img/a.jpg"/>
      <div class="price">
        6450KZT
      </div>
    </div></li>
      <li>  <div class="card">
       <a href="#" class="title">Americano</a>
        <img src="img/a4.jpg"/>
      <div class="price">
        1990KZT
      </div>
    </div></li>
     <li>   <div class="card">
      <a href="#" class="title">Capuccino</a>
        <img src="img/a7.jpg"/>
      <div class="price">
        3650KZT
      </div>
    </div>
    </li>
    <li>
    <div class="card">
      <a href="#" class="title">Latte</a>
        <img src="img/a6.jpg"/>
      <div class="price">
        4990KZT
      </div>
    </div></li>
     <li>   <div class="card">
      <a href="#" class="title">Macchiato</a>
        <img src="img/a3.jpg"/>
      <div class="price">
        3500KZT
      </div>
    </div></li>
    <li>
     <div class="card">
      <a href="#" class="title">Mocha</a>
        <img src="img/a5.jpg"/>
      <div class="price">
        2990KZT
      </div>
    </div></li>
    <li>
    <div class="card">
      <a href="#" class="title">Affogato</a>
        <img src="img/a2.jpg"/>
      <div class="price">
        3600KZT
      </div>
    </div></li>
    <li>
    <div class="card">
      <a href="#" class="title">Flat White</a>
        <img src="img/a4.jpg"/>
      <div class="price">
        6700KZT
      </div>
    </div></li>
    <li>
    <div class="card">
      <a href="#" class="title">Long Black</a>
        <img src="img/a1.jpg"/>
      <div class="price">
        6450KZT
      </div>
    </div></li>
 
        

  </div></ul>

</div>

<footer> 
<p>All rights reserved</p> 
</footer>
</div>

<script>
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}</script>
</body>
</html>