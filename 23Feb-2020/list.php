<?php

$colors= array("Blue","Red","Green");
list($color1,$color2,$color3)=$colors;
echo $color1 . "<br>";
echo $color2 . "<br>";
echo $color3 . "<br>";

function retrieveUserProfile(){
	$user[]="Jason Gilmore";
	$user[]="jason@example.com";
	$user[]="English";
	return $user;

}

list($name, $address, $email)= retrieveUserProfile();
echo "Name :  {$name}, Email : {$email}, Address : {$address}";







?>