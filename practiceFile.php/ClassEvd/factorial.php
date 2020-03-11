<?php
if(isset($_POST['submit'])){

	$mnn = $_POST['mn'];

	function factorial($n){
		if ($n===0) {
		return 1;
	}
	return $n * factorial($n-1);

	}
	echo factorial($mnn);


	}


?>

<form method="post" action="">
	<input type="text" name="mn" placeholder="Enter Number">
	<input type="submit" name="submit" value="submit">
	

</form>