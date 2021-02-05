<?php
	$hostname='localhost';
	$username='root';
	$pwd='';
	
	$conn=mysqli_connect($hostname,$username,$pwd) or die('Database connection failed.');
	mysqli_select_db($conn,'likes');
?>

<!DOCTYPE Html>

<html>

<style>
body{
background-image: url('mint.jpg');
}
</style>

<h1 style="background-color:rgb(128, 255, 223);">Enter your information:</h1>
<body>

<form action="anime_add.php" method="POST">
<fieldset>
<legend>Anime</legend>

  Name:<input type="text" name="name"></input><br>
  Genre:<input type="text" name="genre"></input><br>
  Watched:<input type="text" name="watch"></input><br>
  Number Of Episodes:<input type="text" name="ep"></input><br>
  
</fieldset>

<button onclick="location.href='anime.php'" type="button">Go Back</button>
  <input type="submit" name="Submit" value="Add Anime"></input>
  
</form>
</body>
</html>

<?php
	

if (isset($_POST['Submit'])){
	
	$name=$_POST['name'];
	$genre=$_POST['genre'];
	$watch=$_POST['watch'];	
	$ep=$_POST['ep'];
	

	$q = "INSERT INTO `anime`(`Anime_Name`, `Genre`, `Episodes_No`, `Watched`) VALUES ('$name','$genre','$ep','$watch')";
	
	$run=mysqli_query($conn,$q);
      if($run){
		echo 'Yee gurl.';	
	  }else{
		  echo 'Not Yee Gorl.';
	  }

}
?>