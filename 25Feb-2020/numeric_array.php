<?php
/*
$fruits=["Apple","Mango","Grape",2=>"Honda",12=>"Water Bus"];
echo "<pre>";
//var_dump($fruits);
print_r($fruits);
*/

//Multidimension array:

$states=[
"Ohio" => array("population"=>"11,353,140","Capital"=> "Columbus"),
"Nebraska" => array("population"=>"1,711,263","Capital"=>"Omaba")
];

echo $states["Nebraska"]["Capital"];
echo "<br>";
echo $states["Ohio"]["Capital"];



?>