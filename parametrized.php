<?php
 function sum($a,$b){
    echo $a+$b;
    echo"<br>"; 
}   
sum (10,20);
sum (100,200);
?> 






<?php
//Default Parameters
 function sum1($a=11,$b=22 ){
    echo $a+$b;
    echo"<br>"; 
 }   
sum1();
sum (100,200);
?>