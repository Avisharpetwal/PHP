<?php
// print_r($_REQUEST['user_name']);
// echo"<br>";
// print_r($_REQUEST['user_password'])

foreach($_REQUEST as $key =>$data){
    echo $key ."is :".$data;
    echo"<br>";

}



?>