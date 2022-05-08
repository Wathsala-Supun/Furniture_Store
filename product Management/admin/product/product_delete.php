<?php
include "../../database/product_db.php";
include('../includes/header.php');  



if(isset($_GET['deleteid'])){
    $product_id=$_GET['deleteid'];
    $sql ="DELETE FROM `products` WHERE product_id = '$product_id'";
    $result =mysqli_query($con,$sql);

    if($result){
        header('location:product_read.php?message=successdelete');
    }else{
       die(mysqli_error($con));
    }
}

?>