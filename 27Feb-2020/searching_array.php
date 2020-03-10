<?php
$state="Ohio";
$states=["California","Hawaii","Ohio","New Work"];

if(in_array($state, $states)){
	echo "$state is there";
}else{
	echo "None";
};
?>
<hr>

<?php
$population=array("Dhaka"=>10,"Rajshahi"=>5,"Khulna"=>3);
$dist = "Dhaka";
$number=5;

echo array_key_exists($dist, $population);

?>
<hr>

<?php
$population=array("Dhaka"=>10,"Rajshahi"=>5,"Khulna"=>3);
$number=5;

echo array_search($number, $population);

?>
<hr>

<?php
$population=array("Dhaka"=>10,"Rajshahi"=>5,"Khulna"=>3);
$cities= array_keys($population);
echo "<pre>";
print_r($cities);

?>

<hr>

<?php
$population=array("Dhaka"=>10,"Rajshahi"=>5,"Khulna"=>3);
$pops= array_values($population);


echo "<pre>";
print_r($pops);

?>
<hr>

<?php
$population=array("Dhaka"=>10,"Rajshahi"=>5,"Khulna"=>3);
$pops= array_values($population);

echo sizeof($population);

?>
<hr>

<?php

$states=["California","Hawaii","Ohio","New Work","Ohio","New Work"];
$stateFrequency=array_count_values($states);

//echo "<pre>";
print_r($states);
print_r($stateFrequency);

?>
<hr>

<?php

$states=["California","Hawaii","Ohio","New Work","Ohio","New Work"];
$uniqueStates=array_unique($states);

//echo "<pre>";
//print_r($states);
print_r($uniqueStates);

?>

<hr>
<h1>Sort Value:</h1>

<?php

$grades=array(42,98,100,100,43,12);
sort($grades);
print_r($grades);

?>
<hr>
<h1>Reverse Sort Value:</h1>

<?php

$grades=array(42,98,100,100,43,12);
sort($grades);
$changed=array_reverse($grades);
print_r($changed);

?>
<hr>
<h1>Array Flipping:</h1>

<?php

$population=array("Dhaka"=>10,"Rajshahi"=>5,"Khulna"=>3);
$output=array_flip($population);
echo "<pre>";
print_r($output);

?>



