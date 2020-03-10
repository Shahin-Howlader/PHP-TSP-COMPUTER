<?php
		$fh = fopen("contacts.txt", "w");
	try {
	 if (! fwrite($fh, "Ahmed vai always help me")) {
	 throw new Exception("Could not open the file!");
	 }
	} catch (Exception $e) {
	 echo "Error (File: ".$e->getFile().", line ".
	 $e->getLine()."): ".$e->getMessage();
	} finally {
	 fclose($fh);
	}

?>