<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><? echo 'Welcome to php'; ?></title>
</head>
<?
	$abc ="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima ullam explicabo minus debitis dicta possimus itaque, perferendis, consectetur reiciendis praesentium sapiente unde sunt repellendus odit incidunt perspiciatis facilis? Molestiae, officia?";
	?>

<body>
	<p><?php echo $abc; ?></p>
	<?php echo "<p> $abc </p>"?>

	<?php
	$name= "Abdur Rahim";
	$address= "Karail, Dhaka";

	?>
	<div>
	<?php
	echo "Student's name is: {$name} and his address is {$address}";
	?>
	</div>
	<div>
	<?php
	echo "Student's name is:  $name  and his address is  $address";
	?>
	</div>
	
	
</body>
</html>