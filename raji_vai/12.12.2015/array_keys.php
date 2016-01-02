<?php
require "config.php";

$array = array(0 => 100, "color" => "red");
pr(array_keys($array));

$array = array("blue", "red", "green", "blue", "blue");
pr(array_keys($array, "blue"));

$array = array("color" => array("9" =>"blue", "10" => "red", "11" => "green"),
               "size"  => array("small", "medium", "large"));
pr($array);
pr(array_keys($array));
pr(array_keys($array["color"]));
?>