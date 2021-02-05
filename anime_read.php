<?php
	$hostname='localhost';
	$username='root';
	$pwd='';
	
	$conn=mysqli_connect($hostname,$username,$pwd) or die('Database connection failed.');
	$db=mysqli_select_db($conn,'likes');

    $q="SELECT * FROM `anime` ORDER BY `Anime_Name`";
	
	if($running=mysqli_query($conn,$q)){
		echo 'Anime info: <br>';
		echo '------------------<br>';
	
	while($i=mysqli_fetch_assoc($running)){
	echo '★'.$i['Anime_Name'].' | Genre: ';
	echo $i['Genre'].' | Episodes: ';
	echo $i['Episodes_No'].' | ';
	echo $i['Watched'];
	echo "<br>";
	echo "<br>";
	}
	}else{
	echo "Please retry later.";
}

?>

<!DOCTYPE Html>
<html>

<style>
body{
background-color:rgb(230, 238, 255);
}
</style>

<body >
<form>
<button class="bkbtn" formaction="likes_frontpage.php">Go Back to Homepage</button>

</form>
</body>

</html>
