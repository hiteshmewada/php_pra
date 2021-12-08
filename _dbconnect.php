<?php
    $servername="localhost";
    $username="root";
    $pass="";
    $db="dbHitesh";

    $con=mysqli_connect($servername,$username,$pass,$db);

    if(!$con){
        die("Failed: ".mysqli_connect_error());
    }
    else{
        echo "Connected<br>";
    }
?>