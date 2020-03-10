<?php
$Marks=[
	['name'=>'student1', 'MCQ'=>40,'Des'=>37,'Evd'=>20],
	['name'=>'student2', 'MCQ'=>48,'Des'=>40,'Evd'=>40]

];
?>
<table border="1">
<tr>
	
	<th>Name: </th>
	<th>MCQ</th>
	<th>DESCRIPTIVE</th>
	<th>EVIDENCE</th>
	<th>RESULT</th>
</tr>
	
<?php
$ID=1;
foreach ($Marks as $mark) {
	$total = $mark['MCQ'] + $mark['Des'];

	$eve = $mark['Evd'];
	/*echo "MCQ : " . $mark['MCQ'] . " Descriptive : " . $mark['Des']. " Total: " . $total ;*/
	if($total>=70 && $eve>=30 ){
		$res= " You are Passed";
	}else{
		$res= " You are Failed";
	}
?>
<tr>

	<td><?php echo $mark['name']; ?></td>
	<td><?php echo $mark['MCQ']; ?></td>
	<td><?php echo $mark['Des']; ?></td>
	<td><?php echo $mark['Evd']; ?></td>
	<td><?php echo $res; ?></td>
</tr>

	<!--echo "<tr>

	<td>" .$mark['name']. "</td>
	<td>" .$mark['MCQ']. "</td>
	<td>" .$mark['Des']. "</td>
	<td>" .$mark['Evd']. "</td>
	<td>" . $res . "</td></tr>"
	;-->
<?php
	
}
?>
</table>
