<?php
    $fptr=fopen("myfil.txt","r");
    // echo fgets($fptr);
    // echo fgets($fptr);
    // echo fgets($fptr);
    // echo var_dump(fgets($fptr));
    // Reading a file line by line
    // while($a=fgets($fptr))
    //     echo $a;
    // Reading a file char by chars
    while($a=fgetc($fptr))
        echo $a;
    fclose($fptr);
?>