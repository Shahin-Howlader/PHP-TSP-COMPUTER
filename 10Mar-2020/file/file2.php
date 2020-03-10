<?php
	
	 $users = file('users1.txt');
	
	 foreach ($users as $user) {
	 
	 list($name, $email) = explode(',', $user);
?>
	<a href="mailto:<?php echo $email?>"><?php echo $name?></a><br>

	<?php
	 }
	 ?>
