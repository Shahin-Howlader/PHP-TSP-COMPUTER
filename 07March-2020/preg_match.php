<?php
	if(isset($_POST['submit'])){
	//if(($_SERVER['REQUEST_METHOD'])=='POST'){

	$name =$_POST["name"];
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    echo $nameErr = "Only letters and white space allowed";
	} else{
	echo "Data is Valid";
	}
}


?>

<form action="" method="post">
	<input type="text" name="name" value="<?php if(isset($name)) echo $name?>">
	<input type="submit" name="submit">
	


</form>