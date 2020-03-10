<?php
	
	 $drive = 'file';
	 $dir = dirname($drive);
	 $bytes= disk_free_space($dir);
	 $kb= round($bytes/1024,2);
	 echo $gb= $kb/1024/1024;
?>

