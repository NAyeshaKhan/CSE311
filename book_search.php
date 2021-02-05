<!DOCTYPE Html>
<html>

<style>
body{
background-image: url(YqOe62k.png);
}
</style>

<h1 style="background-color:rgb(83, 207, 180);">Search for Books:</h1>
<body>

<form action="book_search.php" method="POST">

<fieldset>	
<legend>Search by Genre:</legend>
  Genre:<input type="text" name="Gen"></input>
 <input type="submit" name="SubmitGen" value="Search Genre"></input><br> 
 <button class="bkbtn" formaction="likes_frontpage.php">Go Back to Homepage</button>

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

if (isset($_POST['SubmitGen'])){
	$gen=$_POST['Gen'];
	$q="SELECT * FROM `books` WHERE Genre='$gen'";
	$c=0;
	if($running=mysqli_query($conn,$q)){
		echo 'Books of ',$gen, ' genre:<br>';
		echo '------------------------------<br>';
	
		while($i=mysqli_fetch_assoc($running)){
		$c++;
		echo $i['Book_Id'].' | ';
		echo $i['Book_Name'].' | ';
		echo $i['Author'].' | Genre: ';
		echo $i['Genre'].' | Number Of Pages: ';
		echo $i['PageNo'].' | Read?:	';
		echo $i['TBRead'];
		echo "<br>";
		}
		echo '<br>Total ',$c,' books found.' ;
	}
}

?>