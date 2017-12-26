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
float: left;
width:750px;
margin: 20px 0 20px 0;
padding: 10px;

}
.main_section{ 
border: 1px; 
background: white; 
width: 550px; 
height:450px; 
margin:auto;
margin-bottom:50px;

} 
img{
width:150px;
height:150px;}

.title{ 
border:1px; 
border-radius:7px; 
background:white; 
color: blue; 
padding-bottom:5px; 
padding-left:25px; 
padding-right:26px; 
} 
.title:hover, .title:active{ 
background-color:#81BEF7; 
color:black;} 

.card{ 
border:2px solid red; 
width:150px; 
height:190px; 
float: right; 
margin-right: 23px; 
margin-top:10px;; 
border-radius: 7px; 
text-align:center; 
} 

.price{ font-weight:900;} 

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
<li><a href ="Adminpage.php">Admin page</a></li>
</nav>
<div id ="content_area">

</div>

<footer> 
<p>All rights reserved</p> 
</footer>
</div>

<body>
</body>
</html>