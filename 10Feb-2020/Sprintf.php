<!DOCTYPE html>
<html>
<body>

<?php
$number = 9;
$str = "Beijing";
$txt = sprintf("There are %u million bicycles in %s.",$number,$str);
echo $txt . "<hr>";

$number = 200;
$str = "Dhaka";
$txt = sprintf("There are %u million bicycles in %s.",$number,$str);
echo $txt . "<hr>";


$cost1 = sprintf("The Total cost is $%.2f", 43.2);
$cost2 = sprintf("The Total cost is BDT %.2f", 33.2);
echo $cost1 . "<hr>" .$cost2 . "<hr>";
?> 

</body>
</html>
