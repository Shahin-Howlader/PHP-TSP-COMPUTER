<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>News Php</title>
</head>
<body>

<?php 
echo "<pre>";
print_r($_GET);
echo "</pre>";

$first=$_GET['fname'];
$last=$_GET['lname'];



?>

	<h2>Data Sending to Server Using Form</h2>
	<form action="" method="get">
		<input type="text" name="fname"><br>		
		<input type="text" name="lname"><br>		
		<input type="submit" name="submit" value="SEND"><br>		
	</form>


	
</body>
</html>
