<?php
    $host = "localhost";
    $user = "guswjd8694";
    $pass = "guswjd1028!";
    $db = "guswjd8694";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    if(mysqli_connect_errno()){
        echo "Database Connect False";
    }else{
        //echo "Database Connect True";
    }
?>