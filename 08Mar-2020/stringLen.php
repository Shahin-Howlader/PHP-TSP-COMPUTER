<?php
	$pswd = "secretpswd";
	 if (strlen($pswd) < 10)
	 echo "Password is too short!";
	 else
	 echo "Password is valid!";

?>
<hr>
<?php
	$day= "Today is International Women day";
	echo strlen($day);

?>
<hr>

<?php
	 $pswd = "supersecret";
	 $pswd2 = "supersecret2";
	 if (strcmp($pswd, $pswd2) != 0) {
	 echo "Passwords do not match!";
	 } else {
	 echo "Passwords match!";
	 }
?>
<hr>
<?php
		$email1 = "admin@example.com";
	 	$email2 = "ADMIN@example.com";
	 	if (! strcasecmp($email1, $email2))
	 	echo "The email addresses are identical!";
?>
<hr>
<?php
	 $password = "a12345";
	 if (strcspn($password, "1234567890") == 0) {
	 echo "Password cannot consist solely of numbers!";
	 }
?>
<hr>

<h2>String to Lower:</h2>
<?php
 $url = "http://WWW.EXAMPLE.COM/";
 echo strtolower($url);
?>
<hr>

<h2>String to Upper:</h2>
<?php
 $url = "http://www.example.com/";
 echo strtoupper($url);
?>

<hr>

<h2>ucfirst:</h2>
<?php

	$sentence = "the newest version of PHP was released today!";
 	echo ucfirst($sentence);
?>
<h2>ucwords:</h2>
<?php
	 $title = "O'Malley wins the heavyweight championship!";
	 echo ucwords($title);
?>

<h2>lcfirst:</h2>
<?php
$sentence = "The newest version of PHP was released today!";
 	echo lcfirst($sentence);
	 
?>

<h2>New line:</h2>
<?php

	$recipe = "3 tablespoons Dijon mustard
	 1/3 cup Caesar salad dressing
	 8 ounces grilled chicken breast
	 3 cups romaine lettuce";
	 // convert the newlines to <br />'s.
	 echo nl2br($recipe);

	 $str= "How are you dear \n Today is my Birthday \n You are invited";
	 echo nl2br($str);
	 
?>

<h2>Html Entities:</h2>
<?php

	$advertisement = "Coffee at 'Cafè Française' costs $2.25.";
	 echo htmlentities($advertisement, ENT_QUOTES);
	 
?>
<h2>Html Specaial Chars:</h2>
<?php

	$advertisement = "Coffee at <Cafè Française> costs $2.25.";
	 echo htmlspecialchars($advertisement);


	 
?>