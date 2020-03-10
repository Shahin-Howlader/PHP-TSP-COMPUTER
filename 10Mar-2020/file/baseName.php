<?php
	$path = '/home/www/data/users.txt';
	echo basename($path);
	echo "<br>";
	echo dirname($path);
	echo "<br>";
	$myvar = pathinfo('/home/www/data/users.txt');
	echo "<pre>";
	print_r($myvar);
	echo $realpathhhh=realpath($myvar);




?>