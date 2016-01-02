<?php
require "config.php";
$arr = array("Dinajpur", "Dhaka", "Rangpur");
echo gettype($arr)."<br>";
echo is_array($arr) ? "Array" : "Not an arry";

	// if(is_array($arr)){
	// 	echo "array";
	// }
	// else{
	// 	echo "not an array";
	// }

echo "<br>";
$arr2 = "Dinajpur";
echo gettype($arr2)."<br>";
echo is_array($arr2) ? "Array" : "Not an arry";


?>