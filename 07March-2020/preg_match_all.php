<?php
	 $userinfo = "Name: <b>Zeev Suraski</b> <br> Name: <b>PHP Guru</b>";


	 preg_match_all("/<b>(.*)<\/b>/U", $userinfo, $outpur_array);



	 foreach ($outpur_array as $name) {
	 	echo $name . "<br>";
	 }
?>