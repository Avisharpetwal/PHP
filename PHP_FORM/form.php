<?php
// print_r($_POST);
if(isset($_POST['name'])){
    echo"User Name Is:  ".$_POST['name'];
    echo"<br>";
    echo"User password Is: ".$_POST['password'];
    echo"<br>";
    echo"User Email Is:  ".$_POST['email'];
    echo"<br>";
    echo"User Skills  :  ". implode(", " ,$_POST['skills']);
    echo"User Gender Is:  ".$_POST['gender'];
    echo"<br>";
    echo"User City Is: ".$_POST['city'];
    echo"<br>";
}

?>