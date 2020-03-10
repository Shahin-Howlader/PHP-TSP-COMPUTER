<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php Condition</title>
</head>
<body>
	<?php
	/*
	$x = 5.3;

	if($x){
		echo "x variable is alive";
	} else {
		echo "x variable is not assigned value"

	}*/
/*
	$x = 25;
	$y = 15;

	if ($x > $y) {
		echo "X is greater than Y";
	} elseif ($y > $x) {
		echo " Y is greater than X";
	} else {
		echo "X and Y are equal";
	}
*/

	$x = 40;
	switch($x){
		case $x >= 80;
		echo "A+";
		break;

		case $x >=  70;
		echo "A";
		break;

		case $x >=  60;
		echo "A-";
		break;

		case $x >=  50;
		echo "B";
		break;

		default:
		echo "Fail";
	}


	?>
	
</body>
</html>