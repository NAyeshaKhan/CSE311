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
background-color:rgb(180,180,200);
}
</style>

<h1 style="background-color:rgb(200,200,200);">Enter your information:</h1>
<body style ="background-image: url('grey.jpg')";>

<form action="anime_update.php" method="POST">
<fieldset>
<legend>Enter information you would like to update:</legend>

  Anime Id:<input type="text" name="anime_id"></input><br>
  Name:<input type="text" name="name"></input><br>
  Episodes:<input type="text" name="ep"></input><br>
  Watched:<input type="text" name="watch"></input><br>
  
</fieldset>

<button onclick="location.href='anime.php'" type="button">Go Back</button>
  <input type="submit" name="Submit" value="Update info"></input>
  
</form>
</body>
</html>

<?php
	if (isset($_POST['Submit']))
{
	$id=$_POST['anime_id'];
	$name=$_POST['name'];
	$ep=$_POST['ep'];	
	$watch=$_POST['watch'];
	
	$q="UPDATE `anime` SET `Anime_Name`='$name',`Episodes_No`='$ep', `Watched`='$watch' WHERE `Anime_Id`='$id' ";
	
	$run=mysqli_query($conn,$q);
      if($run){
		echo 'Info updated gurl.';	
	  }else{
	    echo 'Information could not be updated.';	
	    }
}
	
?>

	
	
