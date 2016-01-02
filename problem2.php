<?php
$additionArray = array(0,1,2,3,9,12,15,20);
$addition;
$devided;
$sub;
for($i=0; $i<count($additionArray); $i++){
	$addition= $addition + $additionArray[$i];
	if($i == (count($additionArray)- 1)){
		$sub=$additionArray[$i]-$additionArray[0];
	}
	if($i == (count($additionArray)- 5)){
		$devided = $additionArray[$i]/$additionArray[2];
	}
}
echo $addition."<br>";
echo $sub."<br>";
echo $devided;
//echo $vagfol."<br>";

?>