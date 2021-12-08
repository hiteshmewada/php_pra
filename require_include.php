<?php
    include '_dbconnect.php';
    require '_dbconnect.php';
    $sql="select * from `trip`";
    $res=mysqli_query($con,$sql);
    $row=mysqli_num_rows($res);
    echo $row;
?>