<?php
// //constractor methode:
// class myClass{
// public $name;
// public $roll;
// public function __construct($uname,$uroll){
// 	$this ->name = $uname;
// 	$this ->roll = $uroll;
// }
// function func(){
// 	echo "i am " . $this ->name . "my roll no is: " . $this ->roll . "<br>";
// }
// }
// $obj = new myclass("Md Ariful Islam Arif ","428245");
// $obj ->func(); 

class MyClass
{
  public $prop1 = "I'm a class property!";
 
  public function __construct()
  {
      echo 'The class "', __CLASS__, '" was initiated!<br />';
  }
 
  public function __destruct()
  {
      echo 'The class "', __CLASS__, '" was destroyed.<br />';
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
 
// Get the value of $prop1
echo $obj->getProperty();
 
// Destroy the object
unset($obj);
 
// Output a message at the end of the file
echo "End of file.<br />";
 

?>