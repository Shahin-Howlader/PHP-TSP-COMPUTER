<?php
//Multi Dimensional Array:

$players= [
	"Bangladesh" => array("CTG"=>"Tamim","MAG"=>"Sakib","BOG"=>"Mushfiq"),
	"India" => array("Dhili"=>"Ebadat Hossain","Kalkata"=>"Goutam","Madda Pradesh"=>"Shourav Ganguli"),
	"Australia" => array("Sydnee"=>"Matin Langu","Melbourne"=>"Martin Guptil","Brisbane"=>"Shane Warne")

];
echo "<pre>";
echo $players ["Bangladesh"]["MAG"];
echo "<br>";
echo $players ["India"]["Kalkata"];
echo "<br>";
echo $players ["Australia"]["Melbourne"];


$flowers=array();

$flowers[0]= "Rose";
$flowers[1]="unfowers";
$flowers[2]="Rose";
$flowers[3]="Pose";
$flowers[5]="Rose";
print_r($flowers);

echo "The Number is : "  . count($flowers);


?>