<?php

    $server = "localhost";
    $user ="root";
    $pass ="";
    $db ="itpm";

    $conn = new mysqli($server,$user,$pass,$db);

    if(!$conn){
        die(mysqli_error($conn));
    }




?>