<?php
function pr($data){
	//echo "<pre>";
	//print_r($data);
	//echo "</pre>";
}
//how to get min number from an array:
$arr = array(5,8,62,4,587,1,54,654,3645,1,87,6,524,10);
$even_arr = array();
$len = count($arr);
$min = $arr[0];
$max = $arr[0];
for($i = 1; $i < $len; $i++){
	if($min > $arr[$i]){
		$min = $arr[$i];
	}elseif($max < $arr[$i]){
			$max = $arr[$i];
	}
}
function even_number(){
global $len, $arr;

echo "Array(";

for($i = 0; $i < $len; $i++){
	if($arr[$i] % 2 == 0){
		$value= $arr[$i];
		$even_arr[] = $arr[$i];
		echo $arr[$i].",";
	}
	
}
echo ")";
echo pr($even_arr);

}
echo "Even numbers are:...<br>";
echo even_number();
echo "The minimum number is ".$min."<br>";
echo "The maximum bumber is ".$max."<br><br><br>";
function calculation($x,$y){
	$addition = $x + $y;
	$subtraction = $y - $x;
	$multiplication = $x * $y;
	$divided = $y / $x;
	$modulas = $y % $x;
	echo "The addition of " .$x. " and " .$y. " is: " . $addition."<br>"; 
	echo "The subtraction of " .$x. " and " .$y. " is: " . $subtraction."<br>"; 
	echo "The multiplication of " .$x. " and " .$y. " is: " . $multiplication."<br>"; 
	echo "The divided of " .$x. " and " .$y. " is: " . $divided."<br>"; 
	echo "The modulas of " .$x. " and " .$y. " is: " . $modulas."<br>"; 
}
echo calculation(2,524);


?>