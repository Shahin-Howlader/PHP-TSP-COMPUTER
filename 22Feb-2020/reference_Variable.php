<?php
$value1 ="Hello";
$value2 =&$value1;
$value2 = "Good Boy";


echo '$value1 is =' . $value1;
echo "<br>";
echo '$value2 is =' . $value2;

?>