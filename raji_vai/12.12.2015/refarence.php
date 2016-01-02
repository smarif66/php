<?php
$x = 10;
$y = &$x;
$y = 20;
echo $x."<br>";
echo $y;



?>