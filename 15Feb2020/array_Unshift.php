<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>News Php</title>
</head>
<body>
	<?php

	//$a =array("a"=>"Red", "b"=>"Green", "c"=>"Blue");
	$a =array("Red", "Green","Blue");

	echo "<pre>";
	print_r($a);
	echo "<hr>";

	echo array_unshift($a, "Yellow")."<br>";
	print_r ($a);
	

	?>
	
</body>
</html>
