<h2>Sort the array by Capital City</h2>
<?php
$country= ['Bangladesh'=>'Dhaka','India'=>'Kalkata','England'=>'Milton Keynes','United State'=>'Texus'];
asort($country);
foreach ($country as $con => $city) {
	echo "Country Name " . $con . "City Name: " . $city . "<br>";
}


?>