<?php
	 $file = 'file_size.php';
	 printf("File last accessed: %s", date("m-d-y g:i:sa",
	fileatime($file)));
?>

