<?php   


$servername="localhost";
$username="root";
$pass="";

$con=mysqli_connect($servername,$username,$pass);

if(!$con){
    die("Failed: ".mysqli_connect_error());
}
else{
     echo "Connected<br>";
}

$sql="CREATE DATABASE dbHitesh";
$res=mysqli_query($con,$sql);

if($res){
    echo "The db was created<br>";
}
else{
    echo "The db was not created because ".mysqli_error($con);
}
// echo "The result is ";
// echo var_dump($res);
// echo "<br>";


?>