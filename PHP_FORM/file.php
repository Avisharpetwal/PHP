<?php
// print_r($_FILES['fileupload']);
if($_FILES['fileupload']){
$path=($_FILES['fileupload']['name']);
$upload_path="./upload".$path;
move_uploaded_file($_FILES['fileupload']['tmp_name'],$upload_path)
|| die("failed to uplaod");
}

else{
    die("failed to uplaod");
}

?>