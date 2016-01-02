<?php
 
class MyClass
{
  public $prop1 = "I'm a class property!";
  
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
 
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
 
class MyOtherClass extends MyClass
{
  public function __construct()
  {
      echo "A new constructor in " . __CLASS__ . ".<br />";
  }
 
  public function newMethod()
  {
      echo "From a new method in " . __CLASS__ . ".<br />";
  }
}
 
// Create a new object
$newobj = new MyOtherClass;
 
// Output the object as a string
echo $newobj->newMethod();
 
// Use a method from the parent class
echo $newobj->getProperty();
 
?>