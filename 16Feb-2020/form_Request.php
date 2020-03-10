<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>News Php</title>
</head>
<body>

<?php 
if (isset($_REQUEST['submit'])) {

	/*echo "<pre>";
	print_r($_REQUEST);
	echo "</pre>";
	*/


	$first=$_REQUEST['fname'];
	$last=$_REQUEST['lname'];
	$gender=$_REQUEST['gender'];
	$address=$_REQUEST['address'];
	$dist=$_REQUEST['dist'];
	echo "Name:" . $first . " " . $last . "<br>";
	echo "Gender :" . $gender . "<br>";
	echo "Address :" . $address . "<br>";
	echo "District :" . $dist;

}

?>

	<h2>Data Sending to Server Using Form</h2>
	<form action="" method="post">
		<input type="text" name="fname"><br>		
		<input type="text" name="lname"><br>		
		<input type="radio" name="gender" value="Male">Male	
		<input type="radio" name="gender" value="Female">FeMale	<br>
		<textarea cols="7" rows="7" name="address">Address</textarea><br>
		<select name="dist">
			<option value=""><--Select Dist--></option>
			<option value="Dhaka">Dhaka</option>
			<option value="Barisal">Barisal</option>
			<option value="Khulna">Khulna</option>
		</select>
		<input type="submit" name="submit" value="SEND">		
	</form>


	
</body>
</html>
