<?php
function pr($data){
	echo "<pre>";
	print_r($data);
	echo "<pre>";
}
function rt($data){
echo "Return type of array_combine(): " . gettype($data);
}

//array combine: with default function and menual.....
$car = array("BMW1","BMW2","BMW3","BMW4","BMW5");
$model = array("2011","2012","2013","2014","2015");
//menual:
// for($i=0; $i<count($car); $i++){
// 	$newArray[$car[$i]] = $model[$i];
// }
// pr($newArray);
//default function:
$newArray = array_combine($car, $model);
pr($newArray);
rt($newArray);

//array_flip:
$flipArr = array("car1" => "bmw1", "car2" => "bmw2", "car3" => "bmw3", "car4" => "bmw4");
$flipArr = array_flip($flipArr);
pr($flipArr);
rt($flipArr);
echo "<br>";

//array_key_exits:
$arrKyExits = array(1, "car1" => "bmw1", "car2" => "bmw2", $mullArr = array(1,5,8,4));
$return = array_key_exists("car1", $arrKyExits) ? "true" : "false";
echo array_key_exists("car1", $arrKyExits) ? "This element is in the array" : "this element not in the array";
echo "<br>";
echo "Return type of array_key_exists: " . gettype(array_key_exists("car1", $arrKyExits));

//array_deys:
$array = array("color" => array("9" =>"blue", "10" => "red", "11" => "green"),
               "size"  => array("small", "medium", "large"));
echo "<pre>";
pr(array_keys($array));
pr(array_keys($array["color"]));

//array-marge:
$arr = array("arif" => 1, "1" => 2, "2" => 3);
$arr2 = array("arif" => 11, "1" => 2, "2" => 3);
$arr3 = array_merge($arr, $arr2);
pr($arr3);
rt(array_merge($arr, $arr2));

?>