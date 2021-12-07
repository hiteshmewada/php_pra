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
    $sql="DELETE FROM `trip` WHERE `dest`='Wuhan' LIMIT 1 ";
    $res=mysqli_query($con,$sql);
    $aff=mysqli_affected_rows($con);
    echo "<br>Number of affected rows: $aff";
    if($res){
        echo "Deleted successfully";
    }
    else{
        $er=mysqli_error($con);
        echo "Not deleted due to : $er";
    }
?>