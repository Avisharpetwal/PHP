<?php
include "config1.php";
$sql="SELECT * FROM posts";
$result = $conn->query($sql);
echo"<br>"; 


// echo"<table border =1>";
// foreach($result as $r){
//     echo"<tr>
//   <td>" . $r['id']."</td>
//    <td>" . $r['title']."</td>
//    <td>" . $r['content']."</td>
//    <td>" . $r['created_at']."</td>
//    </tr>";
// }
echo "<table border=1>";
echo "<tr><th>ID</th><th>Title</th><th>Content</th><th>Created At</th><th>Actions</th></tr>";
foreach($result as $r){
    echo "<tr>
        <td>".$r['id']."</td>
        <td>".$r['title']."</td>
        <td>".$r['content']."</td>
        <td>".$r['created_at']."</td>
        <td>
            <a href='edit.php?id=".$r['id']."'>Edit</a> | 
            <a href='delete.php?id=".$r['id']."' onclick=\"return confirm('Are you sure?')\">Delete</a>
        </td>
    </tr>";
}
echo "</table>";


?>