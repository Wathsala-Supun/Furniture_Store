<?php
include "../../database/product_db.php";
include('../includes/header.php');  



if(isset($_GET['deleteid'])){
    $nic=$_GET['deleteid'];
    $sql ="DELETE FROM `payment` WHERE nic='$nic'";
    $result =mysqli_query($con,$sql);

    if($result){
    echo "delete successfully";
    // header('Location: product_read.php');
    }else{
        die(mysqli_error($con));
    }
}

?>