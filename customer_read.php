<?php
	$hostname='localhost';
	$username='root';
	$pwd='';
	
	$conn=mysqli_connect($hostname,$username,$pwd) or die('Database connection failed.');
	mysqli_select_db($conn,'bookstore');

$q="SELECT * FROM `customer_info`";
	$db=mysqli_select_db($GLOBALS['conn'],'bookstore');

	if($running=mysqli_query($GLOBALS['conn'],$q)){
		echo 'Current customer information is: <br>';
		echo '----------------------------------------<br>';
	
	while($i=mysqli_fetch_assoc($running)){
	echo $i['Customer_Id'].' | ';
	echo $i['FirstName'].' ';
	echo $i['LastName'].' | ';
	echo $i['Address'].', ';
	echo $i['City'].'| ';
	echo $i['PhoneNumber'].' |';
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