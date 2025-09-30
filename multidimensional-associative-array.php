<?php
$array=[
    ["name"=>"Avishar","age"=>22,"city"=>"Dehradun"],
    ["name"=>"Sonu","age"=>24,"city"=>"Noida"],
    ["name"=>"Abhishek","age"=>23,"city"=>"Mysore"]

];
//For and ForEach
for($i=0;$i<count($array);$i++){
    foreach($array[$i] as $key=>$value)
    echo("$key :$value <br>");
    echo"<br>";
}

//ForEach -ForEach
foreach($array as $x){
    foreach($x as $key=>$value){
        echo"$key:$value";
        echo"<br>";
    }

    echo"..................<br>";
}









?>