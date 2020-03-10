<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php Array</title>
</head>
<body>
	<?php 

		$days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Firday"];

		$fruits = array("Apple", "Mango", "Orange", "Grape");

		print $days[0];
		print "<br>";
		print $days[1];
		print "<br>";
		echo $fruits[2]; 
		print "<hr>";


		for($i = 0; $i<count($fruits); $i++){

			echo $fruits[$i] . "<br>";
		}




	?>
	
</body>
</html>