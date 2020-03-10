<?php
  
  /*$i=0;
While($i<=10) {
If ($i<=5) {
Continue;
}
Print $i;
$i=$i+1;
}
*/


?>
<h3>How Funny</h3>
<?php
$a="1";
If($a==1) {
Print "sonna is funny";
}
elseif($a=="1") {
Print "sonna is jolly ";
} else {
Print "sonna is gomvir";
}


?>


<h3>How Funny</h3>
<?php
$a="1";
If($a==1) {
Print "sonna is funny";
}
elseif($a=="1") {
Print "sonna is jolly ";
} else {
Print "sonna is gomvir";
}


?>


<h3>Cal</h3>

<?php
	$price = 10; $tax = 5; 
	function calcSalesTax($price, $tax)
	{
	$total = $price + ($price * $tax);

	echo "Total cost: $total";

	 }
	 calcSalesTax($price, $tax);


?>

<h3>Cal00</h3>

<?php
	function zz(&$x) { 
			$x=$x+5;
		}

		$x=10;
		zz($x);
		echo $x; 



?>
