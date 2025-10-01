    <?php
    $file="files/avp.txt";
    $my_file=fopen($file,"r") or die("Not Open the file");
    echo fread($my_file,filesize($file));
    fclose($my_file);
    ?>