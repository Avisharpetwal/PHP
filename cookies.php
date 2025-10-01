<?php
setcookie("fruits","Apple",time()+(86400));

if(isset($_COOKIE['fruits'])){
    // print_r($_COOKIE);
    echo "Current Cookie Name is : ".$_COOKIE["fruits"];
}
else
    {
    echo"No cookie is set";
}

?>