<?php
$days=array("Sunday","Monday","Tuesday");
$str="Hello";
//echo is_array($days);
//cho is_array($str);

 ?>
 <h1>is_bool()</h1>
 <?php
 $str=True;
 //echo is_bool($str);

 ?>
 ?>
 <h1>is_float()</h1>
 <?php
 $val=127.50;
 echo is_float($val);

 ?>
  ?>
 <h1>is_null()</h1>
 <?php
 $val=null;
 printf (is_null($val));

 ?>

 <h1>is_numeric()</h1><hr>
 <?php
 $val=127.50;
 echo is_numeric($val);

 ?>
  <h1>is_object()</h1>
 <?php
 
 class Employee{
 	public $name;
 	public $age;
 }
 $obj1 = new Employee;
 echo is_object($obj1);

 ?>