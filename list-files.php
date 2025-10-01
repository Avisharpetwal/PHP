<?php
$path="files";
$item=scandir($path);
// print_r($item);
$item=array_diff($item,array(".",".."));
// print_r($item);




foreach($item as $d){
    echo "<a href =./files/$d>$d</a>";
    echo"<br>";
}






?>