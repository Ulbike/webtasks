<!DOCTYPE html>
<html>
<head>
	<title>ADD coffee</title>
</head>
<body>
	<form class="add-coffee" action="insert.php">
		<p>Name of coffee 
			<input type="text" id="name_c" name="name"> 
		</p> 
		<p> Price 
			<input type="number" id="price_c" name="price"> 
		</p> 
		<p>Upload a photo 
			<input type="file" id="upload" name="f"> 
			<input type="submit" id = "send" value="Send"> 
		</p> 
		<button id="button_search" action = "for.php">=Submit</button>
	</form>

</body>
</html>