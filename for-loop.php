<?php
$n=5;
for($i=1;$i<$n;$i++){
    echo("Hello".$i."<br>");   
    if($i==2){
        break;
    }
}

echo"<br>";
$n=5;
for($i=1;$i<$n;$i++){
    if($i==2){
        continue;
    }
     echo("Hello".$i."<br>"); 
}


echo"<br>";

$table=10;
for($i1=1;$i1<=10;$i1++){   
echo $table . " x " . $i1 . " = " . ($table * $i1) . "<br>";
}

?>