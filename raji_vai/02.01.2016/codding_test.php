<?php
require '../config.php';
$array = array();
$arr_chk = array(51,71,81);
$result = 0;
for($i=0; $i<=100; $i++){
	if($i%2 != 0){
		if(!in_array($i, $arr_chk)){
			$arr[] = $i;
			$result = $result + $i;
		}
	}
}

pr($arr);
echo " <h1>The addition is: " . $result . "</h1>";

?>