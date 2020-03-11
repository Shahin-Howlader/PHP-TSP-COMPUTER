<?php
$date = new DateTime("11 March 2020 20:55");
echo "<pre>";
print_r($date);

echo $date->format("Y-M-d H:i:sA");

?>
<h2>Set Date: </h2>

<?php
	$date = new DateTime();
	$date->setDate(2019,8,25);
	echo $date->format("F j, Y");
?>

<h2>Modify Date time: </h2>

<?php
	$date = new DateTime("Mar 11, 2020 00:33");
	$date->modify("+27 hours");
	echo $date->format("Y-m-d h:i:s");
?>

<h2>Calculating the Difference Between Two Dates: </h2>

<?php
	$terminationDate = new DateTime('2020-05-30');
	$todaysDate = new DateTime('today');
	$span = $terminationDate->diff($todaysDate);
	echo "Your subscription ends in {$span->days} days!";
?>