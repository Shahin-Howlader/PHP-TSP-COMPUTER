<?php
	
	 $users = file('users1.txt');
	
	 foreach ($users as $user) {
	 
	 list($name, $email) = explode(',', $user);
	 echo "Name : " . $name ." " . "Email : ". $email . "<br>";


	 }
?>