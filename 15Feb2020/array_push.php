<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>News Php</title>
</head>
<body>
	<?php

	$colors = array("red", "Green", "Blue");

	echo "<pre>";
	print_r($colors);
	array_push($colors, "Orange", "Apple");
	echo "<hr>";
	print_r($colors);
	

	?>
	
</body>
</html>
