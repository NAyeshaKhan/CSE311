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
background-color:rgb(224, 224, 235);
}
</style>

<h1 style="background-color:rgb(200,200,200);">Enter your information:</h1>
<body>

<form action="customer_insert.php" method="POST">
<fieldset>
<legend>Data Collection</legend>

  Customer Id:<input type="text" name="custid"></input><br>
  First Name:<input type="text" name="fname"></input><br>
  Last Name:<input type="text" name="lname"></input><br>
  Address:<input type="text" name="address"></input><br>
  City:<input type="text" name="city"></input><br>
  Phone Number:<input type="text" name="phone"></input><br>
  
</fieldset>
  <input type="submit" name="Submit" value="Submit your info"></input>
  
</form>
</body>
</html>

<?php
	$custid=NULL;
	$fname=NULL;
	$lname=NULL;	
	$city=NULL;
	$address=NULL;
	$phone=NULL;


if (isset($_POST['Submit'])){
	
	$custid=$_POST['custid'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];	
	$city=$_POST['city'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];

}

	$q = "INSERT INTO `customer_info`(`Customer_Id`,`FirstName`, `LastName`,`Address`,`City`,`PhoneNumber`) VALUES ('$custid','$fname','$lname','$address','$city','$phone')";
	
	$run=mysqli_query($conn,$q);
      if($run){
		echo 'Info has been inserted.';	
	  }
?>