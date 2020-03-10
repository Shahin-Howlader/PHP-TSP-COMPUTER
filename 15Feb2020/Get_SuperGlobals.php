<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>News Php</title>
</head>
<body>

	<!--<a href="Get_SuperGlobals.php?name=Shahin&address=Motijhil&phone=0171700000">Test Get Method</a>-->
	<a href="Get_SuperGlobals.php?country=Bangladesh">Bangladesh</a>
	<a href="Get_SuperGlobals.php?country=India">India</a>
	<a href="Get_SuperGlobals.php?country=Australia">Australia</a>


	<?php
	echo "<br>";
	//print_r($_GET);
	/*
		echo $_GET['name'];
		echo "<br>";

		echo $_GET['address'];
		echo "<br>";

		echo $_GET['phone'];
		echo "<br>";
		*/

		if($_GET['country']=='Bangladesh'){
			echo "Welcome All Bangladeshi";
		}elseif($_GET['country']=='India'){
			echo "Welcome All India";
		}elseif($_GET['country']=='Australia'){
			echo "Welcome All Australia";
		}
	
	

	


	?>
	
</body>
</html>
