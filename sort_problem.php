<?php
function pr($data){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

function arr_value($data){
	$arr = array();
	
	foreach($data as $value){
		$arr[] = $value;
	}

	return $arr;
}

$res_arr = array();
$arr = array(255,1,5,20, 10, 30, 80, 9, 8);
$arr_count = count($arr);

for($i = 0; $i<$arr_count; $i++){
	$min = min($arr);
	$res_arr[] = $min;
	$value = array_search($min, $arr);
	unset($arr[$value]);
	// $arr = array_values($arr);
	$arr = arr_value($arr);
}

pr($res_arr);

// $car_arr = array(
// 	"2000"=>"car1", 
// 	"2001"=>"car2", 
// 	"2002"=>"car3", 
// 	"2003"=>"car4"
// );
// $arr2 = array();
// foreach($car_arr as $value){
// 	//echo $value."<br>";
// 	$arr2[] = $value;
// }
// pr($arr2);


// pr($car_arr);

// $str = "2000";
// for($i = 0; $i < strlen($str); $i++){
// 	echo $str[$i]."<br>";
// }

?>