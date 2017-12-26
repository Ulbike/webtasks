<?php 
$con = mysqli_connect('localhost', 'root', '', 'project'); 
if($con->connect_error){ 
die("connection failed ".$con->connect_error); 
} 
$name = $_GET['name'];
$price = $_GET['price']; 
$photo = $_GET['f']; 
$query = "INSERT INTO coffees (name, price, srcOfImage) 
VALUES('$name' , '$price' , '$photo')"; 
if($con->query($query)==TRUE){ 
header('Location: http://localhost/Project/Adminpage.php'); 
$con->close(); 
exit; 
} 
else{ 
echo "ERROR"; 
} 
?>