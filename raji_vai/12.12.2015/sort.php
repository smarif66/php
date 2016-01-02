<?php
function pr($data){
	echo "<pre>";
	print_r($data);
	echo "<pre>";
}
echo "<h4>sort function:</h4>";
$sort_arr = array(9,8,5,58,4);
sort($sort_arr);
pr($sort_arr);


echo "<h4>rsort function:</h4>";
$rsort_arr = array(9,8,5,58,4);
rsort($rsort_arr);
pr($rsort_arr);

echo "<h4>asort function:</h4>";
$asort_arr = array("cat" => "5441", "eag" => "4285", "apple" => "199386", "frog" => "dinajpur", "guest" => "arif");
// $asort_arr = array("cat" => "635", "eag" => "1586", "apple" => "842", "frog" => "12", "guest" => "25");

asort($asort_arr);
pr($asort_arr);

echo "<h4>ksort function:</h4>";
$ksort_arr = array("cat" => "5441", "eag" => "4285", "apple" => "199386", "frog" => "dinajpur", "guest" => "arif");
ksort($ksort_arr);
pr($ksort_arr);

echo "<h4>arsort function:</h4>";
$arort_arr = array("cat" => "5441", "eag" => "4285", "apple" => "199386", "frog" => "dinajpur", "guest" => "arif");
arsort($arort_arr);
pr($arort_arr);

echo "<h4>krsort function:</h4>";
$krsort_arr = array("cat" => "5441", "eag" => "4285", "apple" => "199386", "frog" => "dinajpur", "guest" => "arif");
krsort($krsort_arr);
pr($krsort_arr);


?>