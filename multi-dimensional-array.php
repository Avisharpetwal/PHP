<?php
$array=[
    [1,"Avishar","Noida"],
    [2,"Sam","Gurgaon"],
    [3,"Sonu","Delhi"]
];

// print_r ($array);




for($i=0;$i<count($array);$i++){
    for($j=0;$j<count($array[$i]) ;$j++){
        echo$array[$i][$j];
        echo"<br>";


    }
    echo"<hr>";
}

?>