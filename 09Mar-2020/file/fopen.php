<?php
	 
	 $fh = fopen('users.txt', 'r');
	
	 while (!feof($fh)) {
	 	echo fgets($fh);
	 	echo "<br>";

	 }
	 fclose($fh);
?>