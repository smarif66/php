<?php
function pr($data){
	echo "<pre>";
	print_r($data);
	echo "<pre>";
}

$carName = array("BMW1","BMW2","BMW3","BMW4","BMW5","BMW6");
$carModel = array(2001,2002,2003,2004,2005,2006);

for($i=0; $i<count($carName); $i++){
	$newArray[$carName[$i]] = $carModel[$i];
}
pr($newArray);

?>