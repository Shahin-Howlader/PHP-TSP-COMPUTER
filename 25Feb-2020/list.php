<?php
$users=file('users.txt');


foreach ($users as $user) {

$userlist=explode("|", $user);
list($name, $area, $district)= $userlist;
//echo $name . " " . $area . " " . $district ."<hr>";
echo " <b>Name is : </b>" . $name . "<br>";
echo "<b>Address : </b>" . $area . "<br>";
echo "<b>District : </b>" . $district . "<hr>";
}

?>