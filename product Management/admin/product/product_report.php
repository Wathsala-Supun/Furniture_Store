<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Generate Report</title>
</head>
<body onload="print()">
    <div class ="container">
         <center>
             <h3 style="margin-top:30px;"> Product List </h3>
             <hr>
         </center>

         <table id="ready" class =" table table-striped table-bordered" style="width: 100$;">
         <thead>
               <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>price</th>
                <th>Image</th>
                <th>Status</th>
                <th>Warrenty</th>
                <th>Meterial</th>
                <th>Dimention</th>
                <th>Color</th>
               

                </tr>
         </thead>
         <tbody>

            <?php 
             include "../../database/product_db.php";
             
             $sql ="SELECT * FROM products";


             $result = mysqli_query($con,$sql);

             while($row =mysqli_fetch_array($result)){

             ?>

             <tr>
                <td><?php echo $row['product_id']?></td>
                <td><?php echo $row['product_name']?></td>
                <td><?php echo $row['category']?></td>
                <td><?php echo $row['product_price']?></td>
                <td><img src="../images/<?php echo $row['product_image']?>" class="card-img-top" style="width: 150px; height: 150px;" >
                <td><?php echo $row['product_status']?></td>
                <td><?php echo $row['warranty_period']?></td>
                <td><?php echo $row['material']?></td>
                <td><?php echo $row['dimentions']?></td>
                <td><?php echo $row['color']?></td>
                
             </tr>
                   <?php } ?>
         </tbody>
</div>
<!-- <div class="container">
  <button type="" class="btn btn-info noprint'" style =" width: 100% ;"
  onclick= "window.location.replace('product_read.php');"> Cansel Printing </button>
</div> -->
</body>
</html>