<?php
include('connect.php');

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql ="DELETE FROM p_order WHERE id=$id";
    
    $res =mysqli_query($conn,$sql);

    if($res){
        header('location:readorder.php?message=successdelete');
    }else{
        die(mysqli_error($conn));
    }
}


?>