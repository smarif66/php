<?php
function pr($data){
	echo "<pre>";
	print_r($data);
	echo "<pre>";
}

// for($i=1; $i<=20; $i++){
// 	$arr[] = $i;
// }
// pr($arr);

$numbers = range(1, 20);
pr($numbers);
shuffle($numbers);
pr($numbers);
// foreach ($numbers as $number) {
//     echo "$number "."<br>";
// }

?>