<?php
    // start session and get data
    session_start();
    if(isset($_SESSION['username'])){
        echo "Hello ". $_SESSION['username'];
        echo "<br> Your favourite category is ". $_SESSION['favcat'];
        echo "<br>";
        
    }
    else echo "Please login to continue";
?>