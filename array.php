<?php
$arr=array("Avishar","Sonu","Abhishek","Rohit","Sachin","Himanshu","Harshit");
$arr1=["Avishar","Sonu","Abhishek","Rohit","Sachin","Himanshu","Harshit"];

echo $arr[0];//Avishar
echo"<br>";
echo $arr1[0];//Avishar
echo"<br>";
echo"<br>";
echo"<br>";

//Count the Length Of Array
echo count($arr);
echo"<br>";
echo"<br>";


echo"<br>";
for($i=0;$i<count($arr);$i++){
    echo $arr[$i];
    echo"<br>"; 
}
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";



//FOREACH
foreach($arr as $x){
    echo $x;
    echo"<br>";

}

echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";


// For Each With Break
foreach($arr as $x){
    echo $x;
    echo"<br>";
    if($x=="Sachin"){
        break;
    }
}


//For Each With Continue
echo"<br>";
echo"<br>";
foreach($arr as $x){
    if($x=="Sachin"){
        continue;
    }
    echo $x;
    echo"<br>";

}



// 2 Method: ForEach
echo"<br>";
echo"<br>";
foreach($arr as $x):
    echo $x;
    echo"<br>";

endforeach;    








?>