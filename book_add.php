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
background-image: url('tumblr_3033e5fa5ea7ce70be33503642d54afb_cb9111c5_1280.jpg');
}
</style>

<h1 style="background-color:rgb(250, 220, 223);">Enter your information:</h1>
<body>

<form action="book_add.php" method="POST" >
<fieldset>
<legend>Anime</legend>

  Name:<input type="text" name="name"></input><br>
  Author:<input type="text" name="author"></input><br>
  Genre:<input type="text" name="genre"></input><br>
  Number Of Pages:<input type="text" name="pages"></input><br>
  Read this Or Nah?:<input type="text" name="tbr"> </input><br> 
</fieldset>

<button onclick="location.href='book.php'" type="button">Go Back</button>
  <input type="submit" name="Submit" value="Add Book"></input>
  
</form>
</body>
</html>

<?php
	

if (isset($_POST['Submit'])){
	
	$name=$_POST['name'];
	$author=$_POST['author'];
	$genre=$_POST['genre'];
	$pages=$_POST['pages'];
	$tbr=$_POST['tbr'];	
	
	$q = "INSERT INTO `books`(`Book_Name`,`Author`, `Genre`, `PageNo`,`TBRead`) VALUES ('$name','$author','$genre','$pages','$tbr')";
	
	$run=mysqli_query($conn,$q);
      if($run){
		echo 'Yee gurl.';	
	  }else{
		  echo 'Not Yee Gorl.';
	  }

}
?>