<?php
include "config1.php";

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
    $conn->query("DELETE FROM posts WHERE id=$id");
}

header("Location: index.php");
exit;
?>