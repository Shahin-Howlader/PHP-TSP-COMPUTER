<?php

$customers= array();
$customers[] = array("Rhaim", "rahim@gmail.com", "017170000");
$customers[] = array("Mamun", "mamun@gmail.com", "017170000");
$customers[] = array("Karim", "karim@gmail.com", "017170000");

?>

<h1>Rule-3</h1>
<table border="1">
	<tr>
		<TD>SL</TD>
		<TD>Name</TD>
		<TD>Email</TD>
		<TD>Phone</TD>
	</tr>

	<?php
	$id = 1;
	foreach ($customers as $customer) {
	list($name,$email,$phone)= $customer;
	
	?>

	<tr>
		<td><?php echo $id; ?></td>
		<TD><?php echo $name ?></TD>
		<TD><?php echo $email ?></TD>
		<TD><?php echo $phone ?></TD>
		
	</tr>
	
<?php $id++; } ?> <!--This is For PHP Ending };-->

</table>