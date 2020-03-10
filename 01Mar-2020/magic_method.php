<?php

class Employee {    
	public $name;    
	function __set($propName, $propValue)    
	{        
		$this->$propValue = $propValue;   
	} 
}
$employee = new Employee; 
$employee->name = "Mario"; 
$employee->title = "Executive Chef";
$employee->address = "Mirpur";

echo "Name: {$employee->name}<br>";
echo "Title: {$employee->title}<br>";
echo "Address: {$employee->address}";



?>