<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Form With PHP</title>
</head>
<body>
	<form action="" method="post">
		<label>Email :</label>
		<input type="text" name="email" value="Email" placeholder="Enter Your Email"><br>

		<label>Password :</label>
		<input type="password" name="pass" value="Password" placeholder="Enter Your Password"><br>
		<input type="submit" name="submit" value="Click Here">
		

	</form>

	<?php 
	if (isset($_REQUEST['submit'])) {




	$email=$_REQUEST['email'];
	$pass=$_REQUEST['pass'];
	
	echo "Email:" . $email . "<br>";
	echo "Password :" . $pass;
	

}




	?>
	
</body>
</html>