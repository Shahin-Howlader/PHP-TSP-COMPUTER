<?php
	
	 $file = 'files/phpbook.pdf';
	 $bytes = filesize($file);
	 $filename=basename($file);
	 $kilobytes = round($bytes/1024, 2);

	 echo "Size of the file $filename is $kilobytes KB";
	 
	
?>

