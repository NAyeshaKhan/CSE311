<?php
$host="localhost";
$user="root";
$pwd="";
$conn=mysqli_connect($host,$user,$pwd);



?>

<!DOCTYPE Html>
<html>

<style>
body{
background-color:rgb(128,215,255);
}
</style>
<body>

</body>
</html>

<?php
function ReadColour($conn){
if($conn){
	
$q="SELECT * FROM `colours` ORDER BY Id";
	$db=mysqli_select_db($conn,'test');

	if($running=mysqli_query($conn,$q)){
		echo 'People who took the survey are:<br>';
	
	while($i=mysqli_fetch_assoc($running)){
	echo $i['FirstName'].' ';
	echo $i['LastName'].',';
	echo $i['Id'];
	echo "<br>";
	echo "<br>";
	}
	echo "Query executed successfully.";	
}else{
	echo "Unsuccessful.";
}

}
}
ReadColour($conn);
mysqli_close($conn);
?>