<?php
$num=10;
if ($num + 2 ==12){
    goto abc;
    echo"Hello World";

abc:
echo"Avishar Petwal";
}
?>

<?php
$n=10;
for($i=0;$i<10;$i++){
    echo$i."<br>";
    if($i==5){
        goto jump;
    }
}

jump:
echo"Loop Break";



?>