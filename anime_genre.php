<!DOCTYPE Html>
<html>

<style>
body{
background-color:rgb(255, 229, 204);
}
</style>


<h1 style="background-color:rgb(255, 215, 179);">Search for Books:</h1>
<body>

<form action="anime_genre.php" method="POST">


<fieldset>	
<legend>Search by Genre:</legend>
  Genre:<input type="text" name="genre"></input><br>
  
  <button onclick="location.href='anime.php'" type="button">Go Back</button>
 <input type="submit" name="Submit" value="Search by Genre"></input><br> 
</fieldset>  
  
  
  
</form>

</body>
</html>

<?php
	$hostname='localhost';
	$username='root';
	$pwd='';
	
	$conn=mysqli_connect($hostname,$username,$pwd) or die('Database connection failed.');
	
	$db=mysqli_select_db($conn,'likes');

if (isset($_POST['Submit'])){
	$gen=$_POST['genre'];
	
	$q="SELECT * FROM `anime` WHERE Genre ='$gen'";
	$c=0;
	if($running=mysqli_query($conn,$q)){
			while($i=mysqli_fetch_assoc($running)){
			$c++;
			echo $i['Anime_Name'].' | Episodes:';
			echo $i['Episodes_No'].' | ';
			echo $i['Watched'].'<br>';
			}
			echo '<br>Total ',$c,' series found.' ;
		}
}

?>