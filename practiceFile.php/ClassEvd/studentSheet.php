
<table border="1">
	<tr>
		<th>Student Name</th>
		<th>Score</th>
	</tr>
<?php	

$sres=[
	'Shahin Tuhin'=>80,
	'Asif Akbor'=>72,
	'Ahmed Khan'=>86,
	'Nazmul islam'=>83,
	'Sikandar doe'=>89,

];

foreach ($sres as $name => $score) {

	?>

	<tr>
		<td><?php echo $name ?></td>
		<td><?php echo $score ?></td>
	</tr>

	<?php
	}
?>
</table>
<?php

	$maxscore =max($sres);
	$maxscorer = array_search($maxscore, $sres);
	echo "<h2> Maximum Number Scorer </h2>";
	echo "Name : " . $maxscorer . "Score : ". $maxscore;
	?>

