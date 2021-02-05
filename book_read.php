<?php
	$hostname='localhost';
	$username='root';
	$pwd='';
	
	$conn=mysqli_connect($hostname,$username,$pwd) or die('Database connection failed.');
	mysqli_select_db($conn,'likes');
$q="SELECT * FROM `books` ORDER BY 'TBRead' DESC";
	
	if($running=mysqli_query($conn,$q)){
		echo 'Book info: <br>';
		echo '------------------<br>';
	
	while($i=mysqli_fetch_assoc($running)){
	echo '♥ '.$i['Book_Name'].' | Author: ';
	echo $i['Author'].' | Genre: ';
	echo $i['Genre'].' | Number Of Pages: ';
	echo $i['PageNo'].' | ';
	echo $i['TBRead'];
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
background-image: url('pixel sky 1.jpg');
}
</style>
<body>

<form>
<button class="bkbtn" formaction="likes_frontpage.php">Go Back to Homepage</button>
</form>
</body>

</html>
