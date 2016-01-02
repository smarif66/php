<?php
function pr($data){
	echo "<pre>";
	print_r($data);
	echo "<pre>";
}

$arr = array("arif" => 1, "1" => 2, "2" => 3);
$arr2 = array("arif" => 11, "1" => 2, "2" => 3);
$arr3 = array_merge($arr, $arr2);
pr($arr3);
// 0=>1
// 1=>2
// 2=>3
// 3=>1
// 4=>2
// 5=>3


?>