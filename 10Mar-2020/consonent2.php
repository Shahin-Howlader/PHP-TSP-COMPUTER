<?php
if(isset($_POST['submit'])){



$dchar = $_POST['mytext'];
$dlower=strtolower($dchar);


if($dlower=='a' ||$dlower=='e'||$dlower=='i'||$dlower=='o'||$dlower=='u'){

	echo "$dlower is Vowel.";
} else{
	echo "$dlower is Consonent.";

}

}

?>

<form method="post" action="">
	<input type="text" name="mytext" placeholder="Enter Character">
	<input type="submit" name="submit" value="Vowel/Consonent">
	
</form>