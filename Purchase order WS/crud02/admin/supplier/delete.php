<?php
include('connect.php');

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql ="DELETE FROM supplier WHERE id=$id";
    
    $result =mysqli_query($conn,$sql);

    if($result){
        header('location:read.php?message=successdelete');
    }else{
        die(mysqli_error($conn));
    }
}


?>