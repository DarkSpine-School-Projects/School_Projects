<?php
$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];

$c1 = (pow($a,2)) + (pow($b,2));
$c1=sqrt($c1);
echo "\nc: ".$c1;
//$a
$a1 = (pow($c,2)) - (pow($b,2));
$a1=sqrt($a1);
echo "\na: ".$a1;
//b
$b1 = (pow($c,2)) - (pow($a,2));
$b1=sqrt($b1);
echo "\nb: ".$b1;

?>