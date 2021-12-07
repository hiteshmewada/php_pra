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

// create table

$sql="CREATE TABLE `trip` (`sno` INT(6) NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(12) NOT NULL, `dest` VARCHAR(6) NOT NULL, PRIMARY KEY(`sno`))";
$res=mysqli_query($con,$sql);

if($res){
    echo "The table was created<br>";
}
else{
    echo "The table was not created because ".mysqli_error($con);
}
