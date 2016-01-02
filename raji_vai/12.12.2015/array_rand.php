<?php
require "config.php";

$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input,1);
print_r($input[$rand_keys]);

?>