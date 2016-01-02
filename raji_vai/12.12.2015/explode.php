<?php
function pr($data){
	echo "<pre>";
	print_r($data);
	echo "<pre>";
}

$fruits = "fruit1,fruit2,fruit3,fruit4,fruit5,fruit6";
$fruits = explode(",", $fruits);
pr($fruits);

?>