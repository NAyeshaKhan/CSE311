<?php
	$hostname='localhost';
	$username='root';
	$pwd='';
	
	$conn=mysqli_connect($hostname,$username,$pwd) or die('Database connection failed.');
	mysqli_select_db($conn,'test');
?>

<!DOCTYPE Html>
<html>

<style>
body{
background-color:rgb(128,215,245);
}
</style>

<h1 style="background-color:rgb(230,247,255);">What are your favourite colours?</h1>
<body>

<form action="Test.php" method="POST">
<fieldset>	
<legend>Data Collection</legend>

  First Name:<input type="text" name="fname"></input><br>
  Last Name:<input type="text" name="lname"></input><br>
  Customer Id:<input type="text" name="id"></input><br>
  Colour:<input type="text" name="color"></input><br>
  Gender:<input type="text" name="gender"></input><br>
  So you're:<?php echo $_POST["fname"] ?>
</fieldset>
  <input type="submit" name="Submit" value="Submit survey info"></input>
  
<br>Delete by Id:<input type="text" name="DelId"></input><br>
  <input type="submit" name="DeleteId" value="Submit deletion id"></input>
</form>
</body>
</html>

<?php


if (isset($_POST['Submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$id=$_POST['id'];	
	$color=$_POST['color'];
	$gender=$_POST['gender'];
	$del=NULL;

}

function InsertInfo($fname,$lname,$id,$color,$gender){
	$q = "INSERT INTO `colours`(`FirstName`, `LastName`,`Id`,`Color`,`Gender`) VALUES ('$fname','$lname','$id','$color','$gender')";
	
	$run=mysqli_query($GLOBALS['conn'],$q);
      if($run){
		echo 'Connection has been successfully built.<br>';	
	  }
	  else{
	    echo 'Connection failed.<br>';	
	    }
	}

function Search($color){
	
	$q="SELECT * FROM `colours` WHERE Color='$color'";
	$db=mysqli_select_db($GLOBALS['conn'],'test');

	if($running=mysqli_query($GLOBALS['conn'],$q)){
		echo 'People who like the colour ',$color, ':<br>';
	
	while($i=mysqli_fetch_assoc($running)){
	echo $i['FirstName'].' ';
	echo $i['LastName'].',';
	echo $i['Id'].',';
	echo $i['Color'];
	echo "<br>";
	echo "<br>";
	}
	echo "Query executed successfully.";	
}else{
	echo "Unsuccessful.";
}
}

if(isset($_POST['DeleteId'])){
	$del=$_POST['DelId'];
	$fname=NULL;
	$lname=NULL;
	$id=NULL;	
	$color=NULL;
	$gender=NULL;
	
}

function DeleteInfo($del){
	$q = "DELETE FROM `colours` WHERE Id='$del'";
	
	$run=mysqli_query($GLOBALS['conn'],$q);
        $db=mysqli_select_db($GLOBALS['conn'],'test');

	if($running=mysqli_query($GLOBALS['conn'],$q) && $del!=NULL){
		echo 'Id is deleted.';
	}else if ($del=NULL){
		echo 'No Id removed.';
	}
	}


InsertInfo($fname,$lname,$id,$color,$gender);
Search($color);
DeleteInfo($del);

?>