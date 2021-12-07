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
$name="Yogesh";
$dest="Wuhan";
// sql query for insertion

    $sql="INSERT INTO `trip` (`name` ,`dest`) VALUES('$name','$dest') ";

    $res=mysqli_query($con,$sql);

    if($res){
        echo "The record in table was created<br>";
    }
    else{
        echo "The record in table was not created because ".mysqli_error($con);
    }
