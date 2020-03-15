<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "wdpf44";
$con = mysqli_connect($host, $user, $pass,$db);

if(!$con){
	die("Something problem");
};

//mysql_select_db($db);



?>