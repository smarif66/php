<?php
class myClass{
public $name = "Md Ariful Islam ";
public $district = "Dinajpur";
public function myfunc(){
	echo "I am " . $this ->name . "and i come from " . $this ->district;
}
}
class MyOtherClass extends myClass{
public function myfunc2(){
	echo "I am " . $this ->name . "and i come from " . $this ->district;
}
}
$object1 = new myClass;
$object1 ->myfunc();


?>