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
   
    // select where clause to fetch data from database.
    $sql="SELECT * FROM `trip` where `dest`='China'";
    $res=mysqli_query($con,$sql);
    $num=mysqli_num_rows($res);
    echo $num . " records found in database";
    echo "<br>";
    // Display row returned by sql query
    if($num>0){
        // $row=mysqli_fetch_assoc($result);
        // echo var_dump($row);
        while($row=mysqli_fetch_assoc($res)){
            // echo var_dump($row);
            echo $row['sno']. ". Hello ".$row['name']." Welcome to ".$row['dest'];
            echo "<br>";
        }
    }

     // update by where clause
     
    $sql ="UPDATE `trip` SET `name` = 'Rajesh' WHERE `sno` = 3";
    $res=mysqli_query($con,$sql);
    echo var_dump($res);
    $aff=mysqli_affected_rows($con);
    echo "<br>Number of affected rows: $aff";
    if($res) echo "Updated successfully";
    else echo "Not updated";
?>