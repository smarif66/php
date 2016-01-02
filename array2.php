<?php
$carName = array("BMW1","BMW2","BMW3","BMW4","BMW5","BMW6");
$carModel = array(2001,2002,2003,2004,2005,2006);
$newArray = array();

for($i=0; $i<count($carName); $i++){
	//echo $carName[$i]."<br>";
	//echo $carModel[$i]."<br>";
	$newArray[$carName[$i]] = $carModel[$i]."<br>";
}
echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br><br>";
for($i=0; $i<count($carName); $i++){
	echo "Car Name: " . $carName[$i] . " Car Model: " . $carModel[$i] . "<br>";
}

?>