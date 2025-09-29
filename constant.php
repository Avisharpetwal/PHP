<?php
$data="Avishar";
//Method 1:
const data=123;
echo data;
echo"<br>";
const data1="Avishar Petwal";
// const data1="Avp";
//Warning: Constant data1 already defined in C:\xampp\htdocs\test\constant.php on line 8
echo data1;
echo"<br>";


$name="Sonu Kumar";
$name="Avp";
echo $name;
echo"<br>";



//Method 2:

define("data2","Abhishek Rawat");
// define("data2","Rohit Chamoli");
//Warning: Constant data2 already defined in C:\xampp\htdocs\test\constant.php on line 24
echo data2;
?>