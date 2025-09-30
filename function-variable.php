<?php

function hello(){
    echo"Hello World ";
}
$avi="hello";
$avi();//Hello World
echo $avi();//Hello World
?>








<?php
 function Avishar(){
    echo"Avishar Petwal";
}

$avp="Avishar";

function Sonu($avp){
    echo"Sonu Kumar";
    Avishar();
}
//Callbback Function
Sonu($avp);


?>