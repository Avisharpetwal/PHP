<?php
include("./config.php");
$query="Select * from students";
$result=$conn->query($query);

echo"<br>"; 


echo"<table border =1>";
foreach($result as $r){
    echo"<tr>
  <td>" . $r['id']."</td>
   <td>" . $r['name']."</td>
   <td>" . $r['course']."</td>
   <td>" . $r['batch']."</td>
   <td>" . $r['city']."</td>
   <td>" . $r['year']."</td>
   </tr>";
}

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {

//         echo "<pre>";
//         print_r($row);
//         echo "</pre>";

//     }
// } else {
//     echo "No records found.";
// }

// echo"<br>";
// $result = $conn->query("SHOW TABLES");
// while ($row = $result->fetch_array()) {
//     echo $row[0] . "<br>";
// }




?>