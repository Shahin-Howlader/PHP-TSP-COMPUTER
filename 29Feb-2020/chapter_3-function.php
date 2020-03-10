<h2>shuffle</h2>
<?php

$face = array("J", "Q", "K", "A");
$numbered = array("2", "3", "4", "5", "6", "7", "8", "9");
$cards = array_merge($face, $numbered);

shuffle($cards);
echo "<pre>";
print_r($cards);

?>

<h2>Array Combine</h2>
<?php

$abbreviations = array("AL", "AK", "AZ", "AR");
$states = array("Alabama", "Alaska", "Arizona", "Arkansas");
$stateMap = array_combine($abbreviations,$states);
print_r($stateMap); 

?>
<h2>Array Combine-Our Class</h2>
<?php

$students = array("Monir","Minar","Shorab","Nazmul");
$score =array(45,50,60,75);
$result=array_combine($students, $score);
print_r($result); 

?>
<h2>Array Slice</h2>
<?php

$states = array("Alabama", "Alaska", "Arizona", "Arkansas",
 "California", "Colorado", "Connecticut");
$subset = array_slice($states, 2);


print_r($subset); 
?>

<h2>Array Slice</h2>
<?php

$states = array("Alabama", "Alaska", "Arizona", "Arkansas",
 "California", "Colorado", "Connecticut");
$subset = array_slice($states,2,-3);


print_r($subset); 
?>

<h2>Array Splice</h2>
<?php

$states = array("Alabama", "Alaska", "Arizona", "Arkansas",
 "California", "Colorado", "Connecticut");
$subset = array_splice($states,2,3);


print_r($subset); 
?>

<h2>Array Splice</h2>
<?php

$states = array("Alabama", "Alaska", "Arizona", "Arkansas",
 "California", "Colorado", "Connecticut");
$subset = array_splice($states,2,3);


print_r($subset); 
?>

<h2>Splice</h2>
<?php
$states = array("Alabama", "Alaska", "Arizona", "Arkansas",
 "California", "Connecticut"); 

$subset = array_splice($states, 2, -1, array("New York", "Florida"));
print_r($states); 


?>

<h2>Array_Difference</h2>
<?php

$array1 = array("OH", "CA", "NY", "HI", "CT");
$array2 = array("OH", "C", "HI", "OP", "IA");
$array3 = array("TX", "MD", "", "OH", "HI");
$diff = array_diff($array1, $array2, $array3);
print_r($diff); 

?>

