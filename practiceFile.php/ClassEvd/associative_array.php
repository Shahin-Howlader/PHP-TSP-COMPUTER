<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$area =array("Bangladesh"=>"Dhaka","India"=>"Delhi","Pakistan"=>"Islamabad","England"=>"London");

ksort($area);
foreach($area as $country => $city){
	echo "Country name is: $country and Capital Name is $city <br>";
	
	};

?>




</body>
</html>