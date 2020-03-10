<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Guess with Form</title>
</head>
<body>
<form action="guess.php" method="post">
	Guess: <input type="text" name="guess" value="">
	<input type="submit" name="submit" value="SEND">
	
</form>


<?php
$secretNumber = 453;
if($_POST['guess']==$secretNumber){
	echo "Congratulations!";

}else{
	echo "Sorry!";
}


?>	
</body>
</html>

