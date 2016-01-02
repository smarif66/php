<?php
require 'config.php';

$carName = array("BMW1","BMW2","BMW3","BMW4","BMW5","BMW6");
$carModel = array(2001,2002,2003,2004,2005,2006);
$newArray = array_combine($carName, $carModel);
pr($newArray);
echo gettype(array_key_exists('BMW4', $newArray))."<br>";

if (array_key_exists('BMW4', $newArray)==true) {
    echo "The element is in the array";
}else{
	echo "The element is not in the array";
}

?>