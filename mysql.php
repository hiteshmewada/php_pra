<?php   
    echo "Hii<br>";
$servername="localhost";
$username="root";
$pass="";
$con=mysqli_connect($servername,$username,$pass);

if(!$con){
    die("Failed".mysqli_connect_error());}
    else echo "Connected";
?>