<?php

$con=new mysqli('localhost','root','','furniture_store');
if(!$con){
    die(mysqli_error($con));
}
?>