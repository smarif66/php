<?php
require "config.php";
$arr = array("Dhaka", "Rangpur", "Dinajpur", "Khulna");
$implode_var = implode(", ", $arr);
pr($implode_var);
$explode_var = explode("," , $implode_var);
pr($explode_var);
?>