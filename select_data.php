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
    $sql="SELECT * from `trip`";
    $result=mysqli_query($con,$sql);
    // find no of records return
    $num=mysqli_num_rows($result);
    echo $num . " records found in database";
    echo "<br>";
    // Display row returned by sql query
    if($num>0){
        // $row=mysqli_fetch_assoc($result);
        // echo var_dump($row);
        while($row=mysqli_fetch_assoc($result)){
            // echo var_dump($row);
            echo $row['sno']. ". Hello ".$row['name']." Welcome to ".$row['dest'];
            echo "<br>";
        }
    }

?>