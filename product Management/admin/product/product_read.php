<?php
include "../../database/product_db.php";
include('../includes/header.php');  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Product Display</title>

  <style>
        .search{
            width:300px;
            margin-left:850px;
        }
    </style>
  
</head>
<body>
<br><br><br><br>
<div class="container">
  <center>
    <br>
  <h3> Manage Product </h3>
  </center>
  <form action="" method="GET">
<div class="search">
<div class="input-group mb-3">
 
</div>
</div>
    </form>


<button class="btn btn-success my-5"> <a href="product_add.php" class="text-light">Add Product</a> </button>
<button class="btn btn-primary my-5"> <a href="product_report.php" class="text-light">Print Report</a> </button>
<button type="submit" class="btn btn-warning "><a href="product_filter.php? >"class="text-light"> Search </button>

<?php 
      if(isset($_GET['message'])): ?>
      <div class = "alert alert-success text-center " role ="alert" id="alert" >
        <?php 
            if ($_GET['message'] == "successadd"){
              echo"Successfull Added Product ";
            } elseif($_GET['message']== "successupdate"){
              echo " Successfull Update Pruduct :";
            }elseif($_GET['message']=="successdelete"){
              echo " Successfull Deleted product";
            }
  ?>
  </div>
  <?php endif ?>

  <table class="table">
  <thead>
    <tr>
        <th scope="col" >Product ID</th>
        <th scope="col">Product Name</th>
        <th scope="col">Category</th>
        <th scope="col">price</th>
        <th scope="col">Image</th>
        <th scope="col">Status</th>
        <th scope="col">Warrenty</th>
        <th scope="col">Meterial</th>
        <th scope="col">Dimention</th>
        <th scope="col">Color</th>
        <th scope="col">Oparatins</th>
    </tr>
  </thead>
  <tbody>
   <?php
        
        $sql ="SELECT * FROM products";
        $result = mysqli_query($con,$sql);

        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $product_id=$row['product_id'];
                $product_name=$row['product_name'];
                $category=$row['category'];
                $product_price=$row['product_price'];
                $product_image=$row["product_image"];
                $product_status=$row['product_status'];
                $warranty_period=$row['warranty_period'];
                $material=$row['material'];
                $dimentions=$row['dimentions'];
                $color=$row['color'];
                echo ' <tr>

                
                <th scope="row">'.$product_id.'</th>
                <td>'.$product_name.'</td>
                <td>'.$category.'</td>
                <td>'.$product_price.'</td>
                <td><img src="../../images/'.$row['product_image'].'" class="card-img-top" style="width: 150px; height: 150px;" ></td>
                <td>'.$product_status.'</td>
                <td>'.$warranty_period.'</td>
                <td>'.$material.'</td>
                <td>'.$dimentions.'</td>
                <td>'.$color.'</td>
                <td>
              
                <button class="btn btn-primary p-2"><a href="product_update.php? updateid='.$product_id.'" class="text-light" mg-2>Update</a></button><br>
                <button class="btn btn-danger my-2 "><a href="product_delete.php? deleteid='.$product_id.'" class="text-light">Delete</a></button>
                </td>
              </tr>';
            }
        }
        
   ?>
   


  </tbody>
</table>

</div>
    
</body>
</html>
