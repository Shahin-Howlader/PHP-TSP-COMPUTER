<?php
$score = (int) 13.05;
//echo $score;
//var_dump($score);
$sentence = "87 This is sentence 87";
//echo (int) $sentence;

$score = 1114;
$scoreboard = (array) $score;
echo $scoreboard[0];
$scoreboard[1] = 200;
echo '<pre>';
var_dump($scoreboard);
print_r($scoreboard);




?>