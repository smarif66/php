<?php
// //propertise
class propertiesClass{
public $name = "Md Ariful Islam";
public $roll = "428245";
public $x = 10;
public $y = 20;

}
$nameMethode = new propertiesClass();
echo "My name is " . $nameMethode -> name ."<br> And Roll: " . $nameMethode -> roll ."<br>";
echo $nameMethode -> x + $nameMethode -> y."<br>";

//methode:
class methodeClass{
	public function myClass($name){
		$vill = $name;
		echo $vill;
	}
}
$methode2 = new methodeClass();
echo $methode2 -> myClass("arif");


?>