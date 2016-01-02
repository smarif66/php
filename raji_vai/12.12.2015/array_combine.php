<?php
function pr($data){
	echo "<pre>";
	print_r($data);
	echo "<pre>";
}

$carName = array("BMW1","BMW2","BMW3","BMW4","BMW5","BMW6");
$carModel = array(2001,2002,2003,2004,2005,2006);
$newArray = array_combine($carName, $carModel);


pr($newArray);

?>