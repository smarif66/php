<?php
function pr($data){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

function vd($data){
	echo "<pre>";
	var_dump($data);
	echo "</pre>";
}

// class Person{
// 	public $name = "";
// 	public $address = "";

// 	public function setProperty($name, $address){
// 		$this->name = $name;
// 		$this->address = $address;
// 	}

// 	public function getProperty(){
// 		return $this->name . " " . $this->address;
// 	}
// }

// class Student extends Person{
// 	public $dept = "";

// 	public function __constructor($dept){
// 		$this->dept = $dept;
// 	}
// }

// $std_obj = new Student("CSE");
//pr($std_obj);



// class MyClass
// {
//   public $prop1 = "I'm a class property!";
 
//   public function __construct()
//   {
//       echo 'The class "', __CLASS__, '" was initiated!<br />';
//   }
 
//   public function __destruct()
//   {
//       echo 'The class "', __CLASS__, '" was destroyed.<br />';
//   }
 
//   public function __toString()
//   {
//       echo "Using the toString method: ";
//       return $this->getProperty();
//   }
 
//   public function setProperty($newval)
//   {
//       $this->prop1 = $newval;
//   }
 
//   public function getProperty()
//   {
//       return $this->prop1 . "<br />";
//   }
// }
 
// class MyOtherClass extends MyClass
// {
//   public function __construct()
//   {
//       echo "A new constructor in " . __CLASS__ . ".<br />";
//   }
 
//   public function newMethod()
//   {
//       echo "From a new method in " . __CLASS__ . ".<br />";
//   }
// }
 
// // Create a new object
// $newobj = new MyOtherClass;
 
// // Output the object as a string
// echo $newobj->newMethod();
 
// // Use a method from the parent class
// echo $newobj->getProperty();

class parentClass{
	public $firstName = "Md Ariful";
	public $lastName = "Islam";
}
class childClass extends parentClass{
	public function getName(){
		//return $this->firstName = $firstName;
		//return $this->lastName = $lastName;
		echo $this->firstName." " .$this->lastName;
	}
}
$obj = new childClass();
echo $obj->getName();

?>