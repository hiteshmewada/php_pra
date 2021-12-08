<?php
    $fptr=fopen("myfil.txt","r");
    // echo var_dump($fptr);
    if(!$fptr){
        die("Unable to open file");
    }
    $content=fread($fptr,filesize("myfil.txt"));
    fclose($fptr);
    echo $content;
?>