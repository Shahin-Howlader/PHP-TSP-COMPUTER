<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>News Php</title>
</head>
<body>
	<?php
	//Multi Dimension Array;
	
	/*
	$cars = array(
		array("Volvo", 2,1),
		array("BMW", 15,13),
		array("Saab", 5,2),
		array("Land Rover", 17,15),


	);
	echo $cars[0][0] . "<br>";
	echo $cars[0][1]. "<br>";
	echo $cars[0][2];
	*/
	$cars = array("Volvo", "BMW", "Toyota", "Honda");
	$string = implode("-", $cars);


	?>
	
</body>
</html>
