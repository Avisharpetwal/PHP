<?php
$person=[
    "name"=>"Avishar",
    "age"=>22,
    "city"=>"Dehradun",
];

echo $person["name"];
echo"<br>";
echo $person["age"];
echo"<br>";
echo"<br>";




foreach($person as $key=>$value){
    // echo$key."-".$value;
    // echo"$key:$value";
    echo $value;
    echo"<br>";


    
}







?>