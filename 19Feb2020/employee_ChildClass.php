<?php 

class Employee
	{
		private $name; //public name can be directly access.
		private $title;
		protected $wage;

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
	/*

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
	*/

	class Programmer extends Employee

	{ public function setWage($amount){
			$this->wage=$amount;


	}
	public function getWage(){
		return "Sallary is : " .$this->wage;
	}
		public function bonus($percent){
			echo "Bonus: " . $this->wage*$percent/100;


		}//bonus


	}// Programmer

	$prog1= new Programmer;
	$prog1->setWage(10000);
	echo $prog1->getWage();
	echo "<br>";
	$prog1->bonus(10);



?>