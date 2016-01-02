<?php
function pr($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function arr_value($data){
    $arr = array();
    
    foreach($data as $value){
        $arr[] = $value;
    }

    return $arr;
}

$res_arr = array();
$arr = array(255,20,5,20, 10, 30, 80, 9, 8);
$arr_count = count($arr);
$minimum = $arr[0];
function array_min_func($arr){
    $len = count($arr);
    $minimum = $arr[0];
    for($i = 1; $i < $len; $i++){
        if($minimum > $arr[$i]){
            $minimum = $arr[$i];
        }
    }
    return $minimum;
}
for($i = 0; $i<$arr_count; $i++){
    $min = array_min_func($arr);
    $res_arr[] = $min;
    $value = array_search($min, $arr);
    unset($arr[$value]);
    // $arr = array_values($arr);
    $arr = arr_value($arr);
}
pr($res_arr);
?>