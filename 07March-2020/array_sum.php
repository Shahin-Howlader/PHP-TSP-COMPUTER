<h2>Sum of the Number is:</h2>
<?php
	$summ = array("Shahin"=>100, "Tuhin"=>120, "Asif"=>130, "Ahmed"=>160, "Nazmul"=>210);


	echo array_sum($summ);
	
?>

<h2>Sum of the Number is: </h2>
<?php
	$summ = array("Shahin"=>100, "Tuhin"=>120, "Asif"=>130, "Ahmed"=>160, "Nazmul"=>210);
	$total= array_sum($summ);

	foreach ($summ as $name => $tk) {
		echo "Name : $name --- Tk: $tk<br>";
	}
	echo "=Total Tk: " . $total;


	
	
?>