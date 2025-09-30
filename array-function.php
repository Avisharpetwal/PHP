<?php
//count($array)
$array = [1, 2, 3, 4, 5, 6];
echo count($array); // Output: 6

echo"<br>";


//array_push($array, $value)
$array = [1, 2, 3, 4, 5, 6];
array_push($array, 7);
print_r($array);
// Output: [1, 2, 3, 4, 5, 6, 7]

echo"<br>";


//array_pop($array)
$array = [1, 2, 3, 4, 5, 6];
array_pop($array);
print_r($array);
// Output: [1, 2, 3, 4, 5]


//array_shift($array)
$array = [1, 2, 3, 4, 5, 6];
array_shift($array);
print_r($array);
// Output: [2, 3, 4, 5, 6]


//array_unshift($array, $value)
$array = [1, 2, 3, 4, 5, 6];
array_unshift($array, 0);
print_r($array);
// Output: [0, 1, 2, 3, 4, 5, 6]


//in_array($value, $array)
$array = [1, 2, 3, 4, 5, 6];
if (in_array(3, $array)) {
    echo "3 is in the array"; 
} else {
    echo "Not found";
}
// Output: 3 is in the array

//array_keys($array)
$array = [1, 2, 3, 4, 5, 6];
print_r(array_keys($array));
// Output: [0, 1, 2, 3, 4, 5]



//array_values($array)
$array = [1, 2, 3, 4, 5, 6];
print_r(array_values($array));
// Output: [1, 2, 3, 4, 5, 6]


//sort($array)
$array = [6, 3, 1, 5, 2, 4];
sort($array);
print_r($array);
// Output: [1, 2, 3, 4, 5, 6]


//rsort($array)
$array = [6, 3, 1, 5, 2, 4];
rsort($array);
print_r($array);
// Output: [6, 5, 4, 3, 2, 1]



//asort($array)
$array = [6, 3, 1, 5, 2, 4];
asort($array);
print_r($array);
// Output: [2 => 1, 4 => 2, 1 => 3, 5 => 4, 3 => 5, 0 => 6]



// // ksort($array)
$array = [
    3 => "Banana",
    1 => "Apple",
    5 => "Mango",
    2 => "Orange"
];
ksort($array);
print_r($array);
/* Output:
[
    1 => "Apple",
    2 => "Orange",
    3 => "Banana",
    5 => "Mango"
]
*/




krsort($array);
print_r($array);

// Array ( [5] => Mango [3] => Banana [2] => Orange [1] => Apple )












?>