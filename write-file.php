<?php
// $file_name="./files/dummy.txt";
// $content="This Is A Dummy Data ";
// $file=fopen($file_name,"w") or die("Unable to create the file ");
// fwrite($file,$content);
// fclose($file);
// echo"File Created Succesfully";

if(isset($_POST['filename'])){
$file_name="files/".$_POST['filename'];
$content=$_POST['content'];
$file=fopen($file_name,"w") or die("Unable to create the file ");
fwrite($file,$content);
fclose($file);
echo"File Created Succesfully";
}
?>



<form action="" method="post">
    <input type="text" name="filename" placeholder="Enter the File Name">
    <br>
    <br>
    <textarea name="content"></textarea>
    <br>
    <br> 
    <button>Create File</button>


</form>