<?php

	$info = "J. Gilmore:jason@example.com|Columbus, Ohio";
	
	 $tokens = ":|,";
	 $tokenized = strtok($info, $tokens);
	
	 while ($tokenized) {
	 echo "Element = $tokenized<br>";
	
	 $tokenized = strtok($tokens);
	 }

?>