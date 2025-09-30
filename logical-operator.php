<?php
$a = 10;
$b = 12;
//AND
if($a == 10 && $b == 10){
    echo "Both Have the Same Value"; 
} else {
    echo "Both Value Are Different ";
}

echo "<br>";
echo "<br>";
?>


<?php
$a1 = 10;
$b2 = 12;
//OR
if($a1 == 10 || $b2 == 10){
    echo "One Value Match or Both Match "; 
} else {
    echo "Both Value Are Different ";
}

echo "<br>";
echo "<br>";
?>


<?php
$a1 = 10;
$b2 = 12;
//XOR
if($a1 == 10 xor $b2 == 10){
    echo "Only one value is correct. I will run , not if both match or both don’t match."; 
}
echo "<br>";
echo "<br>";

?>



<?php
$a1 = 20;
$b2 = 12;
//XOR
if($a1 !=10){
    echo "Yes"; 
}
?>
