<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Guess with Form</title>
</head>
<body>
<form action="guess2.php" method="post">
	Guess: <input type="text" name="guess" value="">
	<input type="submit" name="submit" value="SEND">
	
</form>


<?php
if(isset($_POST['submit']) && !empty($_POST['guess'])){
	$secretNumber = 453; // && $_POST['guess']!="";
if($_POST['guess']==$secretNumber){
	echo "Congratulations!";

}elseif(abs($_POST['guess']-$secretNumber)<10){
echo "Your are getting close";

}

else{
	echo "Sorry";
}

}

?>	
</body>
</html>

