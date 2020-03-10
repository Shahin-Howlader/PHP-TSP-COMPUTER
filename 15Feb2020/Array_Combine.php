<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>News Php</title>
</head>
<body>
	<?php

	$fname=array("Peter","Ben","Joe","Tuhin");
	$age=array("35","37","43","28");
	$c=array_combine($fname,$age);
	echo "<pre>";
	print_r($c);

	print_r($fname);
	print_r($age);


	?>
	
</body>
</html>
