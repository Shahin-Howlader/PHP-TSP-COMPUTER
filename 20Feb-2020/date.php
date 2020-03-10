<?php
ini_set('max_execution_time', '240');

echo "<h2>This is Date Function</h2>";

echo date("F d, Y");
echo "<br>";
echo date("F j, Y");
echo "<br>";
echo date("D/M/Y");
echo "<hr>";
echo "<h2>This is UCFIRST AND UCWORDS Function</h2>";
$str = "tomorrow is international mother language day";
echo ucfirst($str);
echo "<br>";
echo ucwords($str);
echo "<hr>";

?>