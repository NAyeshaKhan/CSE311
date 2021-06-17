<!DOCTYPE html>
<html>
<style>
body{
background-image: url('tumblr_3033e5fa5ea7ce70be33503642d54afb_cb9111c5_1280.jpg');
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<h1 style="background-color:rgb(250, 220, 223);">Enter your information:</h1>

<body>
	<form action="madlibs.php" method="POST">
	Color:<input type="text" name="color"></input><br>
	Password:<input type="password" name="pass"></input><br>
    <input type="submit"></input>
  
</form>
<?php
	$color=$_POST["color"];
	echo "$color";
?>
</body>
</html>

