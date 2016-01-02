<?php
function pr($data){
	echo "<pre>";
	print_r($data);
	echo "<pre>";
}

$arr = array("car1","car2","car3","car4","car5","car6");
$arr2 = array_flip($arr);
pr($arr2);


?>