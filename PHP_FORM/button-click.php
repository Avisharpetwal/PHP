<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <button name="button" value="btn1">function Call</button>
    </form>
</body>
</html>
<?php
if(isset($_POST['button'])){
     hello();
}

function hello(){
    echo"How Are You Avishar";
}




?>