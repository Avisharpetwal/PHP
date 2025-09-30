<?php

$name="Avp";
function Xyz(){
    //local Variable
    $name="Avishar";
    global $name;//Avp come here
    $name="Petwal";//override Global value
    echo"local Vraible:" .$name;
}
echo"Global Variable".$name;
echo"<br>";
Xyz();


 ?>





<?php

$name="Avishar";
function first(){
    $name="Sonu";
    echo"<br>";
    echo$name;
function Second(){
    // $name="Neelima";
    global $name;//Avishar
    echo"<br>";
    echo$name;  
}

}
echo$name;//Avishar
first();//Sonu
Second();//Avishar if global (other wise Neelima )
?>