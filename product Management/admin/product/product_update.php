<?php
include "../../database/product_db.php";
include('../includes/header.php'); 



$product_id=$_GET['updateid'];
$sql ="SELECT * FROM `products` WHERE product_id='$product_id'";
$result= mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
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

if(isset($_POST['submit'])){
    
        $product_id=$_POST['product_id'];
        $product_name=$_POST['product_name'];
        $category=$_POST['category'];
        $product_price=$_POST['product_price'];
        $product_image=$_FILES["product_image"]['name'];
        $product_status=$_POST['product_status'];
        $warranty_period=$_POST['warranty_period'];
        $material=$_POST['material'];
        $dimentions=$_POST['dimentions'];
        $color=$_POST['color'];
        


  $sql= "UPDATE `products` SET product_name='$product_name',category='$category', product_price='$product_price',product_image='$product_image',product_status='$product_status', warranty_period='$warranty_period',material='$material',dimentions='$dimentions',color='$color' WHERE product_id='$product_id'";
  $result= mysqli_query($con , $sql);
  if($result){
    header('location:product_read.php?message=successupdate');
}else{
   die(mysqli_error($con));
}
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>product</title>
  </head>
  <body>
  <br><br><br>
    
    
    <div class="container my-5">
    <div class="card border-secondary p-4">
    <div class="card-header">
        <h4 class="text-center">Update Product Details </h4>
      </div>
    
    <form method="post" enctype="multipart/form-data">
    
      <div class="form-group">
       
      </div>
      <div class="form-group">
        <label>Product Number</label>
        <input type="text" class="form-control" placeholder="Enter Product ID" name="product_id" value=<?php echo $product_id;?>>
      </div>
      <div class="form-group">
        <label>Product Name</label>
        <input type="text" class="form-control" placeholder="Enter Product Name" name="product_name"value=<?php echo $product_name;?>>
      </div>

      <label>Category</label>
        <select name="category" class="form-control" value=<?php echo $category;?>>
          <option>--Select Cetegory Name--</option>
          <option>Bed</option>
          <option>Tv Console</option>
          <option>Wardrobes</option>
          <option>Tables</option>
          <option>Seating</option>
          <option>Mirrors</option>
          <option>Sofas</option>
          <option>Bookcases</option>
        </select>

      <div class="form-group">
        <label>Product Price</label>
        <input type="text" class="form-control" placeholder="Enter Product Price" name="product_price" value=<?php echo $product_price;?>>
      </div>
      
      
      <div class="form-group">
      <label>Product Image</label><br>
      <img src="../../images/<?= $row['product_image']; ?>" class="card-img-top" style="width: 200px; height: 200px;">
        <input type="file" class="form-control" name="product_image" value=<?php echo $product_image;?>>
    </div>
    <div class="form-group">
        <label>Availability</label>
        <select name="product_status" class="form-control" value=<?php echo $product_status;?>>
          <option>--Select Status--</option>
          <option>IN STOCK</option>
          <option>OUT OF STOCK</option>
        </select>
      </div>
      <div class="form-group">
        <label>Warranty Period(Months)</label>
        <select class="form-control" placeholder="Enter Warranty Period (Months)" name="warranty_period" value=<?php echo $warranty_period;?>>
        <option>0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
        </select> 
      </div>
      <div class="form-group">
        <label>Material</label>
          <input type="text" class="form-control" placeholder="Enter Material Name " name="material" value=<?php echo $material;?>>
        </div>
        <div class="form-group">
        <label>Dimentions</label>
          <input type="text" class="form-control" placeholder="Enter Dimentions (Lenght * Width * Hight) " name="dimentions" value=<?php echo $dimentions;?>>
        </div>
      <div class="form-group">
        <label>Color</label>
        <input type="text" class="form-control" placeholder="Enter Color Name " name="color" value=<?php echo $color;?>>
      </div>
      </div>
   
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      <button class="btn btn-primary my-5"><a href="product_add.php" class="text-light">Clear</a></button>

    </form>
    
    </div>

  </body>
</html>