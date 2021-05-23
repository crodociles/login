<?php

    $serv = "localhost";
    $user = "root";
    $pass = "";
    $db = "login";

    $conn = mysqli_connect($serv,$user,$pass,$db);

    if(!$conn){
        echo "Connection failed";
    }