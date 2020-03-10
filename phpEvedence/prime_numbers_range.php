<?php
	if(isset($_POST['submit'])) {
	
	$n1 = $_POST['sn'];
	$n2 = $_POST['en'];

	for($i = $n1; $i<=$n2; $i++) {
		
		if($i==1) {
			continue;
		}	
		else if ($i==2 || $i==3 || $i==5 || $i==7) {
			echo "<h3> $i </h3>"; 
		}
		else if (($i%2)!=0 && ($i%3)!=0 &&($i%5)!=0 && ($i%7)!=0) {
			echo "<h3> $i </h3>"; 
		}		
	}
	echo "<h3> above prime numbers are between $n1 and $n2</h3>";
}	
?>

<form method="post" action="">
	<p><input type="text" name="sn" placeholder="Starting Number"></p>
	<p><input type="text" name="en" placeholder="Ending Number"></p>
	<input type="submit" name="submit" value="Prime Numbers">
</form>