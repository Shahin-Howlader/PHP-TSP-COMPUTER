<?php
	$name = test_input($_POST["name"]);
	if (!preg_match("/^[a-zA-Z]*$/",$name)) {
    $nameErr = "Only letters and white space allowed";
}
?>

<form action="" method="post">
	<input type="text" name="name">
	<input type="submit">
	


</form>