<?php
    echo "Welcome to write files in php";
    // writing in files

    // $fptr=fopen("myfil2.txt","w");
    // fwrite($fptr,"This is file created using php - By ");
    // fwrite($fptr,"Hitesh\n");
    // fclose($fptr);

    // appending in files
    $fptr=fopen("myfil2.txt","a");
    fwrite($fptr,"\n This is appending in file using php  ");
    
    fclose($fptr);

?>