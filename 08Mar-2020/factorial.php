<?php
if(isset($_POST['submit'])){
	$m= $_POST['inp'];

	function factorial($n){
		if($n==0)
		{
			return 1;
		}
		return $n * factorial ($n-1);
	}
	echo factorial($m);

}

?>
<form method="post">
	<input type="text" name="inp">
	<input type="submit" name="submit" value="submit">
	
</form>
