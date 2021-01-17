<?php
	$hostname='localhost';
	$username='root';
	$pwd='';
	
	$conn=mysqli_connect($hostname,$username,$pwd) or die('Database connection failed.');
	mysqli_select_db($conn,'bookstore');

$q="SELECT * FROM `book_info`";
	$db=mysqli_select_db($GLOBALS['conn'],'bookstore');

	if($running=mysqli_query($GLOBALS['conn'],$q)){
		echo 'Available books are: <br>';
		echo '------------------------------------- <br>';
	
	while($i=mysqli_fetch_assoc($running)){
	echo $i['Book_Id'].' | ';
	echo $i['Book_Name'].' | ';
	echo $i['ISBN'].' | ';
	echo $i['Author'].' | ';
	echo $i['Genre'].' | ';
	echo 'Tk '.$i['Price'];
	echo "<br>";
	echo "<br>";
	}
	echo "Query executed successfully.";	
}else{
	echo "Unsuccessful.";
}

?>

<!DOCTYPE Html>
<html>

<style>
body{
background-color:rgb(215,215,245);
}
</style>
</html>
