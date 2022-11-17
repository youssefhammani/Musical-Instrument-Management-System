<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');



    
    //CONNECT TO MYSQL DATABASE USING MYSQLI
    $link = mysqli_connect("localhost", "root", "", "myProject");

    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>