<?php
include "../../database/product_db.php";

include('../includes/header.php');  


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
  


  $sql= "INSERT INTO `products` (`product_id`, `product_name`, `category`, `product_price`, `product_image`, `product_status`, `warranty_period`,`material`, `dimentions`,`color`) VALUES ( '$product_id','$product_name','$category','$product_price','$product_image','$product_status','$warranty_period','$material','$dimentions','$color')";
  $result= mysqli_query($con , $sql);
  

  if($result){
    header('location:product_read.php?message=successadd');
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
        <h4 class="text-center">Add Product Details </h4>
      </div>
    <form method="post" enctype="multipart/form-data" >
    
      <div class="form-group" > 
      </div>
      <div class="form-group">
        <label>Product Number</label>
        <input type="text" class="form-control"  name="product_id" required placeholder="Enter Product ID"  oninvalid="this.setCustomValidity('Please enter the product ID')" onchange="try{setCustomValidity('')}catch(e){}">
      </div>
      <div class="form-group">
        <label>Product Name</label>
        <input type="text" class="form-control" name="product_name" required placeholder="Enter Product Name"  oninvalid="this.setCustomValidity('Please enter the product name correctly')" onchange="try{setCustomValidity('')}catch(e){}">
      </div>

      <label>Category</label>
    
        <select name="category" class="form-control" required>
          <option >--Select Cetegory Name--</option>
          <option >Bed</option>
          <option >Tv Console</option>
          <option >Wardrobes</option>
          <option >Tables</option>
          <option >Seating</option>
          <option >Mirrors</option>
          <option >Sofas</option>
          <option >Bookcases</option> 
        </select>
        

      <div class="form-group">
        <label>Product Price</label>
        <input type="text" class="form-control" name="product_price"required placeholder="Enter Product Price"  oninvalid="this.setCustomValidity('Please enter Price')" onchange="try{setCustomValidity('')}catch(e){}">
      </div>
      
      <div class="form-group">
        <label>Product Image</label>
        <input type="file" class="form-control" name="product_image" >
    </div>
    <div class="form-group">
        <label>Availability</label>
        <select name="product_status" class="form-control">
          <option>--Select Status--</option>
          <option>IN STOCK</option>
          <option>OUT OF STOCK</option>
        </select>
      </div>
    
      <div class="form-group">
        <label>Warranty Period(Months)</label>
        <select class="form-control" name="warranty_period">
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
          <select class="form-control" name="material" size="5">
          <option>Pine Wood</option>
          <option>Teak Wood</option>
          <option>Jack Wood</option>
          <option>Rose Wood</option>
          <option>Oak Wood</option>
          <option>Mahogani Wood</option>
          <option>Fire Wood</option>
          <option>Walnut Wood</option>
          <option>Cedar Wood</option>
          <option>MDF Board</option>
          <option>Eco Board</option>
        </select>
      </div>

        <div class="form-group">
        <label>Dimentions(L*W*H)</label>
          <input type="text" class="form-control" placeholder="Enter Dimentions (Lenght * Width * Hight) " name="dimentions">
        </div>
      <div class="form-group">
        <label>Color</label>
        <input type="text" class="form-control" placeholder="Enter Color Name " name="color">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      <button class="btn btn-primary my-2"><a href="product_add.php" class="text-light">Clear</a></button>
      </div>
      

     

    
      
    </form>
    
    </div>

  </body>
</html>




