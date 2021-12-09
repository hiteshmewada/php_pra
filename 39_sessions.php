<?php
    // what is session?
    // used to manage information across different pages
    session_start();
    $_SESSION['username']="Hitesh";
    $_SESSION['favcat']="Books";
    echo "we have saved your session";
?>