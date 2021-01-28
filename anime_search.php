<!DOCTYPE Html>
<html>

<style>
body{
background-color:rgb(255, 229, 204);
}
</style>


<h1 style="background-color:rgb(255, 215, 179);">Search for Anime:</h1>
<body>

<form action="anime_search.php" method="POST">


<fieldset>	
<legend>Search:</legend>
  Anime Name:<input type="text" name="name"></input><br>
  Genre:<input type="text" name="genre"></input><br>
  <button onclick="location.href='anime.php'" type="button">Go Back</button>
 <input type="submit" name="Submit" value="Search Name/Genre"></input><br> 
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
	
	$name=$_POST['name'];
	$gen=$_POST['genre'];
	
	if($gen=NULL){
		$q="SELECT * FROM `anime` WHERE `Anime_Name` LIKE '$name'";
		$c=0;
		if($running=mysqli_query($conn,$q)){
			while($i=mysqli_fetch_assoc($running)){
			$c++;
			echo $i['Anime_Name'].' | Genre:';
			echo $i['Genre'].' | Episodes:';
			echo $i['Episodes_No'].' | Watched?: ';
			echo $i['Watched'].'<br>';
			}
			echo '<br>Total ',$c,' series found.' ;
		}	
	}
	else if($name=NULL){
	$q="SELECT * FROM `anime` WHERE Genre='$gen'";
	$c=0;
	if($running=mysqli_query($conn,$q)){
		echo 'Anime of ',$gen, ' genre:<br>';
		echo '------------------------------<br>';
	
		while($i=mysqli_fetch_assoc($running)){
		$c++;
		echo $i['Anime_Name'].' | Genre:';
			echo $i['Genre'].' | Episodes:';
			echo $i['Episodes_No'].' | Watched?: ';
			echo $i['Watched'].'<br>';
			}
		echo '<br>Total ',$c,' series found.' ;
	}
}

}

?>