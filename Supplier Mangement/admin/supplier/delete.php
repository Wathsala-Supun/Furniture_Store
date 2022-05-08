
<?php
include "../../database/product_db.php";

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql ="DELETE FROM supplier WHERE id=$id";
    
    $result =mysqli_query($con,$sql);

    if($result){
        header('location:read.php?message=successdelete');
    }else{
        die(mysqli_error($con));
    }
}


?>