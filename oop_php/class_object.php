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

// Part 1
/**
* My First Class 
*/
// class MyClass
// {
// 	public $prop1 = "I'm a class property!";
// }

// $obj1 = new MyClass();
// $obj2 = new MyClass();

// pr($obj1);
// vd($obj1);

// pr($obj2);
// vd($obj2);

// class Student{
// 	public $name = "Solaman Raji";
// 	public $address = "Dhanmondi, Dhaka";
// 	public $dept = "CSE";
// }

// $std_obj = new Student();

// pr($std_obj);
// vd($std_obj);

// echo "$std_obj->name who lives in $std_obj->address studies in department of $std_obj->dept";


// Part 2
// class MyClass
// {
//   public $prop1 = "I'm a class property!";
 
//   public function setProperty($newval)
//   {
//       $this->prop1 = $newval;
//   }
 
//   public function getProperty()
//   {
//       return $this->prop1 . "<br />";
//   }
// }
 
// $obj1= new MyClass();
// $obj2= new MyClass();
 
// pr($obj1);
// pr($obj2);

// $obj1->setProperty("This is object 1");
// $obj2->setProperty("This is object 2");

// pr($obj1);
// pr($obj2);

// echo $obj1->getProperty();
// echo $obj2->getProperty();

// class Student
// {
//   public $name = "";
//   public $address = "";
//   public $dept = "";

//   public function __construct($name = "", $address = "", $dept = "CSE"){
//   		$this->name = $name;
//   		$this->address = $address;
//   		$this->dept = $dept;
//   }
// }

// $std_obj1 = new Student("Solaman Raji", "Dhanmondi, Dhaka", "CSE");
// pr($std_obj1);
// $std_obj2 =  new Student();
// pr($std_obj2);

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
 
//   public function setProperty($newval)
//   {
//       $this->prop1 = $newval;
//   }
 
//   public function getProperty()
//   {
//       return $this->prop1 . "<br />";
//   }
// }
 
// // Create a new object
// $obj = new MyClass;
 
// // Get the value of $prop1
// echo $obj->getProperty();
 
// // Output a message at the end of the file
// echo "End of file.<br />";



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
 
//   public function setProperty($newval)
//   {
//       $this->prop1 = $newval;
//   }
 
//   public function getProperty()
//   {
//       return $this->prop1 . "<br />";
//   }
// }
 
// // Create a new object
// $obj = new MyClass;
 
// // Get the value of $prop1
// echo $obj->getProperty();
 
// // Destroy the object
// unset($obj);
 
// // Output a message at the end of the file
// echo "End of file.<br />";



class MyClass
{
  public $prop1 = "I'm a class property!";
 
  // public function __construct()
  // {
  //     echo 'The class "', __CLASS__, '" was initiated!<br />';
  // }
 
  // public function __destruct()
  // {
  //     echo 'The class "', __CLASS__, '" was destroyed.<br />';
  // }
 
  public function __toString()
  {
    return "Using the toString method: <br>";
  }
 
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
 
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
 
// Create a new object
$obj = new MyClass;
 
// Output the object as a string
echo $obj;

// // Destroy the object
// unset($obj);
 
// // Output a message at the end of the file
// echo "End of file.<br />";


?>