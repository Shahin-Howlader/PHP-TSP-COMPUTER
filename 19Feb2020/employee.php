<?php 

class Employee
	{
		private $name; //public name can be directly access.
		private $title;

		public function setName($uname){
			return $this->name = $uname;
		}

		public function getName(){
			return $this->name;
		}
		public function sayHello(){
			echo "My name is : " . $this->getName() . "<br>";
		}

	} // class emplyee

	$emp1 = new Employee;
	$emp1->setName("Hasib");

	$emp2 = new Employee;
	$emp2->setName("Monir");

	$emp3 = new Employee;
	$emp3->setName("Shahin Tuhin");

	$emp1->getName();
	//echo "<br>";
	$emp2->getName();
	//echo "<br>";

	$emp1->sayHello();
	echo "<br>";
	$emp2->sayHello();
	echo "<br>";
	$emp3->sayHello();



?>