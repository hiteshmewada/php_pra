<?php
    echo "Welcome to the world of cookies<br>";
    // cookies | Sessions
    // syntax to set cookie
    echo time();
    setcookie("category","Books",time()+86400,"/");
    echo "<br>   The cookie is set";
?>