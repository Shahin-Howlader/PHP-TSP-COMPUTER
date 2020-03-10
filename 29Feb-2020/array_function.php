<?php
$age= array("Ben"=>"35","Tuhin"=>"37","Joe"=>"43");
ksort($age);

echo "<pre>";
print_r($age);

?>
<hr>
<?php
$price = 10; $tax = 5; $total =50;
function calcSalesTax($price, $tax)
{
$total = $price + ($price * $tax);
}
echo "Total cost: $total";

?>

<hr>
<?php
function caalcSalesTax($price, $tax=.02)
{
$total = $price + ($price * $tax);
echo "Total cost: $total";
}

$price = 10;
caalcSalesTax($price);

?>

<hr>
<?php
$colors = array("red","blue","green");
list($red, $blue, $green) = $colors;

echo $red . " is one of Element of " .'$colors';
?>

<hr>
<h1>Using User Profile</h1>
<?php
function UserProfile()
{
$user[] = "Sazzad";
$user[] = "sazzad@gmail.com";
$user[] = "0174586596";
return $user;
}
list($name, $email, $phone) = UserProfile();
echo "Name: $name, email: $email, phone: $phone";

?>

<hr>
<h1>Using User Profile</h1>
<?php
$state[1] = "Pennsylvania";
$state[2] = "New Jersey";

$state[49] = "Hawaii";
print_r($state);


?>
<hr>
<h1>Using </h1>
<?php
$states = array("Florida");
$state = "Ohio";
printf("\$states is an array: %s <br />", (is_array($states) ? "TRUE" : "FALSE"));

?>

<hr>
<h1>Using </h1>
<?php
$states = array("Ohio", "New York");
array_unshift($states, "California", "Texas");

echo "<pre>";
print_r($states);


?>