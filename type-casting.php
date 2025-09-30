<?php
$a=123;
$a= (string) $a;
var_dump($a);
echo"<br>";


$b="123";
$b= (int) $b;
var_dump($b);
echo"<br>";




$c="true";
$c= (int) $c;
var_dump($c);
//int(0)




echo"<br>";
$d=true;
$d= (int) $d;
var_dump($d);
//int(1)



echo"<br>";

$e=123;
$e= (float) $e;
var_dump($e);


echo"<br>";

$f="123";
$f= (Boolean) $f;
var_dump($f);
echo"<br>";



echo"<br>";

$g="Hello ";
$g= (Boolean) $g;
var_dump($g);
echo"<br>";






$h=123;
$h= (array) $h;
var_dump($h);
echo"<br>";






$i=123;
$i= (object) $i;
var_dump($i);
echo"<br>";





$j="Avishar";
$j= (array) $j;
var_dump($j);
echo"<br>";




$k=["Avishar"];
$k= (string) $k;
var_dump($k);
echo"<br>";
//Warning: Array to string conversion in C:\xampp\htdocs\test\type-casting.php on line 88
// string(5) "Array"


?>