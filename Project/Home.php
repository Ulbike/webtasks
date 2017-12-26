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
#image {
width:1000px;
height: 400px;
margin: 20px 0 20px 0;
padding: 30px;
background-image: url("img/home.jpg");
text-align: center;
font-size: 30px;
color: black;

}
#image img{
width: 100px;
height: 90px;
}

.n {
font-size: 30px;
text-style: italic;
}
.o{
font-size: 50px;
text-style: italic;
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
</style>
</head>
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
<li><a href ="Coffee.php">Coffee</a></li>
<li><a href ="Shop.php">Shop</a></li>
<li><a href ="About.php">About</a></li>
</nav>
<div id ="content_area">
<div id ="image">
<img src = "img/m.jpg"><p id ="Merlion">Merlion Cafe </p>
<div class= "n"><p>The next Generation</p></div><div class="o"><p>OF COFFEE</p></div></div>

</div>

<footer> 
<p>All rights reserved</p> 
</footer>
</div>

<body>
</body>
</html>