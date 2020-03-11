<?php
if(isset($_POST['submit'])){

	$mn = $_POST['num'];

	if ($mn==0 ||$mn==1) {
		echo " 0 and 1 is not acceptable";

	}else if ($mn==2 ||$mn==3||$mn==5||$mn==7) {
		echo "<h2> $mn is a Prime Number </h2>";

	}else if (($mn%2)!=0 && ($mn%3)!=0 &&($mn%5)!=0 && ($mn%7)!=0) {
	            echo "<h2> $mn is a Prime number </h2>";

	}else{
		echo "<h2> $mn is Not a Prime Number</h2>";

	}

	}


?>

<form method="post" action="">
	<input type="text" name="num" placeholder="Enter Number">
	<input type="submit" name="submit" value="submit">
	

</form>