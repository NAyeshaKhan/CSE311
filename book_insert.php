<?php
	$hostname='localhost';
	$username='root';
	$pwd='';
	
	$conn=mysqli_connect($hostname,$username,$pwd) or die('Database connection failed.');
	mysqli_select_db($conn,'bookstore');
?>

<!DOCTYPE Html>

<html>

<style>
body{
background-color:rgb(180,180,200);
}
</style>

<h1 style="background-color:rgb(200,200,200);">Enter your information:</h1>
<body>

<form action="book_insert.php" method="POST">
<fieldset>
<legend>Data Collection</legend>

  Book Id:<input type="text" name="bookid"></input><br>
  Book Name:<input type="text" name="bookname"></input><br>
  Author:<input type="text" name="author"></input><br>
  ISBN:<input type="text" name="isbn"></input><br>
  Genre:<input type="text" name="genre"></input><br>
  Price:<input type="text" name="price"></input><br>
  
</fieldset>
  <input type="submit" name="Submit" value="Submit your info"></input>
  
</form>
</body>
</html>

<?php
	$bookid=NULL;
	$bookname=NULL;
	$author=NULL;	
	$isbn=NULL;
	$genre=NULL;
	$price=NULL;


if (isset($_POST['Submit'])){
	
	$bookid=$_POST['bookid'];
	$bookname=$_POST['bookname'];
	$author=$_POST['author'];	
	$isbn=$_POST['isbn'];
	$genre=$_POST['genre'];
	$price=$_POST['price'];

}

	$q = "INSERT INTO `book_info`(`Book_Id`,`Book_Name`, `ISBN`,`Author`,`Genre`,`Price`) VALUES ('$bookid','$bookname','$isbn','$author','$genre','$price')";
	
	$run=mysqli_query($conn,$q);
      if($run){
		echo 'Book information have been added.';	
	  }
	  else{
	    echo 'Values could not be added.';	
	    }
?>