<?php
echo date("d-M-Y h:i:s");

?>
<hr>
<?php
ini_set("date.timezone", "Asia/Dubai");

echo "April 31, 2017: ".(checkdate(4, 29, 2017) ? 'Valid' : 'Invalid');

?>
<hr>
<?php
ini_set("date.timezone", "Asia/Dubai");

echo "April 31, 2017: ".(checkdate(4, 29, 2017) ? 'Valid' : 'Invalid');

?>
<hr>
<?php
	$weekday = date("l");
	$daynumber = date("jS");
	$monthyear = date("F Y");

	echo $weekday . "<br>";
	echo $daynumber . "<br>";
	echo $monthyear;

?>

<hr>
<h2>Get Date:</h2>
<?php
	$timestamp=time();

	$data= getdate($timestamp);
	echo "<pre>";
	print_r($data);
	echo $data['month'];

?>

<hr>
<h2>Time: MKTime:</h2>
<?php
	$timestamp= mktime(8,35,00,1,22,2018);
	$data= getdate($timestamp);
	echo "<pre>";
	print_r($data);

?>

<hr>
<h2>Age Calculate with mktime:</h2>
<?php
	$now = mktime();
	$taxDeadline = mktime(0,0,0,6,9,1990);
	$difference = $taxDeadline - $now;
	$hours = round($difference / 60 / 60);
	echo "Only ".number_format($hours)." hours until the tax deadline!";

?>

<hr>
<h2>Str to Time:</h2>
<?php
	//echo time();
	//echo "<br>";
	echo $futuredate = strtotime("+ days");
	echo date("F d, Y", $futuredate);

?>