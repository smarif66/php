<?php
function br(){
	echo "<br>";
}


//boolean type:true , false.
$x = true;
$y = false;
$z = $y || $x;
echo "X: " . $x . "<br>";
echo "Y: " . $y . "<br>";
echo "Z: " . $z;

if($y == 0){
	echo "i am fine";
}


//integer type: 
//2147483647 =this is a integer type value but,
//2147483648 is not a integer type value it is float type value.
br();
$number = 2147483647;
var_dump($number);

br();
//array type:
$array = array(56,10=>11,10,84,2,21,$arr = array("100" => "arif","asif",$arr3 = array("atier",5,4654,654,6454),"nuru"),452,14,210);
echo "<pre>";
print_r($array);
echo "</pre>";

//null
br();
$a = null;
var_dump($a);
?>