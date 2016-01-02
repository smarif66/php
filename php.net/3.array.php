<?php
function pr($data){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

// $arr = array(20,85,4,69,74,465);
// //pr($arr);
// foreach ($arr as $i => $value) {
// unset($arr[$i]);
// }
// pr($arr);
// $arr[] = 61;
// $arr[] =4;
// $arr[] =4;

// pr($arr);
// $arr = array_values($arr);
// pr($arr);
// $arr[] =4;
// pr($arr);


// $arr2 = array("name1" => "asif","name2" => "fayri","name3" => "rakhi","name4" => "nuru");
// pr($arr2);
// $arr2 = array_values($arr2);
// pr($arr2);



// Array as (property-)map
$map = array( 'version'    => 4,
              'OS'         => 'Linux',
              'lang'       => 'english',
              'short_tags' => true
            );
            
// strictly numerical keys
$array = array( 7,
                8,
                0,
                156,
                -10
              );
// this is the same as array(0 => 7, 1 => 8, ...)

$switching = array(         10, // key = 0
                    5    =>  6,
                    3    =>  7, 
                    'a'  =>  4,
                            11, // key = 6 (maximum of integer-indices was 5)
                    '8'  =>  2, // key = 8 (integer!)
                    '02' => 77, // key = '02'
                    0    => 12  // the value 10 will be overwritten by 12
                  );
                  
// empty array
$empty = array();
pr($empty);


?>