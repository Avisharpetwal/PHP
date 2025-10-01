<?php

$host="localhost";
$username="root";
$password="";
$database="college";


$conn =new mysqli($host,$username,$password,$database);

if ($conn->connect_error){
    die("No Connected ".$conn->connect_error);
}

echo"Connected SuccessFully";



$result=$conn->query("SHOW TABLES")->fetch_all();
print_r ($result);











?>