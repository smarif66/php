<?php
class classa{
	public $name = "Md Ariful Islam";
	public function __construct(){
		echo "the class ". __class__ ." is innitiated" ."<br>";
	}
	public function nameFunc($value){
		$this ->name = $value;
	}
	public function nameFunc2(){
		return $this ->name ."<br>";
	}
}
$obj = new classa;
echo $obj ->nameFunc2();
$obj ->nameFunc("I am arif");
echo $obj ->nameFunc2();

?>
