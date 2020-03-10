
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php Variables</title>
</head>
<body>
	<?php
			$name="Abdur Rahim";
			$address="Dhanmondhi";
			$age=20;
			$phone="017000000"


			//Valid Variables

			$abc;
			$_abc;
			$abc123;
			$abc_def;


			//InValid Variables
			$123abc;
			$123abc;
			$123abc;
			$123abc;
			$123abc;




	?>
	<table border="1px">
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Age</th>
			<th>Phone Number</th>
			
		</tr>
		<tr>
			<td><?php echo $name; ?> </td>
			<td><?php echo $address; ?></td>
			<td><?php echo $age; ?></td>
			<td><?php echo $phone; ?></td>
			
			
		</tr>
	</table>

	
</body>
</html>