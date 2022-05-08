<?php
include "../../database/product_db.php";
include ("../includes/u_header.php");
if(isset($_POST['submit'])){
  
  $name=$_POST['name'];
  $nic=$_POST['nic'];
  $address=$_POST['address'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $cardname=$_POST['cardname'];
  $cardno=$_POST['cardno'];
  $month=$_POST['month'];
  $year=$_POST['year'];
  $cvc=$_POST['cvc'];
  $price=$_POST['price'];
  
 
  $sql= "INSERT INTO `payment` (`nic`,`name`, `address`, `phone`, `email`,`cardname`, `cardno`, `month`, `year`, `cvc`,`price`) VALUES ( '$nic','$name','$address','$phone','$email','$cardname','$cardno','$month','$year','$cvc','$price')";
  $result= mysqli_query($con , $sql);
  if($result){
    echo "payment successful";
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
      <!-- Boxicons CDN Link -->
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Cash on delivery</title>
  </head>
  <body>
  <h4 style="margin-top:0px;" class="text-center text-light bg-info p-1 " >Payment</h4>
  <?php 
      if(isset($_GET['message'])): ?>
      <div class = "alert alert-success text-center " role ="alert" id="alert" >
        <?php 
            if ($_GET['message'] == "successadd"){
              echo"Successfull Added Supplier : ";
            } elseif($_GET['message']== "successupdate"){
              echo " Successfull Update Supplier :";
            }elseif($_GET['message']=="successdelete"){
              echo " Successfull Deleted Supplier :";
            }
  ?> <?php endif ?>
  <div class="containr-fluid">
    <div class="row">
        <div class="col-lg-8 my-5" >
            <div class="card border-secondary p-3">
                
                    <div class="container">
                    <div class="card-header bg-info">
                    <h4 class="text-center text-light">Add Customer Details </h4>

                </div>
                <?php
                    $product_id=$_GET['view_id'];
                    $sql ="SELECT product_price FROM `products` WHERE product_id='$product_id'";
                    $result= mysqli_query($con,$sql);
                    $row=mysqli_fetch_assoc($result);
                    $product_price=$row['product_price'];
               
                ?>
                        <form method="post" enctype="multipart/form-data">
                       
                        
      
                        <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="ex: w.G.K.P vijerathna " name="name" required>
                        </div>
                        <div class="form-group">
                                <label>NIC Number</label>
                                <input type="text" class="form-control" placeholder="ex: 123456789V / 123456789000" name="nic" required>
                        </div>
                        <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" placeholder="ex: No 10/c peradeniya road , kandy" name="address" required>
                        </div>
                        <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" placeholder="ex : 0112365425" name="phone" required>
                        </div>
                        <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" class="form-control" placeholder="ex : wgkp@gmail.com" name="email" >
                        </div>
                        <div class="form-group">
                        <div class="card-header bg-warning">
                    <h4 class="text-center text-light">Add Payment Details </h4>
                </div>
            <label>Name on Card</label>
            <input type="text" class="form-control" placeholder="ex : BOC e plus " name="cardname" required>
      </div>
      <div class="form-group">
            <label>Card Number</label>
            <input type="text" class="form-control" placeholder="ex : xxxxxxxxxxxx" name="cardno" required>
      </div>
      <lebel>Expiration date on card
      <div class="form-group">
        <select name="month" class="form-control" required>
          <option>Month</option>
          <option>01</option>
          <option>02</option>
          <option>03</option>
          <option>04</option>
          <option>05</option>
          <option>06</option>
          <option>07</option>
          <option>08</option>
          <option>09</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
        </select>
      </div>
      <div class="form-group">
        <select name="year" class="form-control" required>
          <option>Year</option>
          <option>2023</option>
          <option>2024</option>
          <option>2025</option>
          <option>2026</option>
          <option>2027</option>
          <option>2028</option>
        </select>
      </div>
      <div class="form-group">
        <label>CVC Code Number</label>
        <input type="text" class="form-control" placeholder="ex : xxx" name="cvc" required>
      </div>
      <div class="product-price">
            <p class="price text-success">Price : <span>Rs <?= number_format($row['product_price']); ?> /=</span></p>                       
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" placeholder=" " name="price" value="<?= $row['product_price']; ?>" readonly>
        </div>
      <button type="submit" class="btn btn-primary" name="submit">Save</button>
      <button class="btn btn-primary my-5"><a href="card.php" class="text-light">Clear</a></button>
      
    
      
    </form>
      
      
    </div>
    
      </div>
        </div>

<div class="col-lg-4 my-5" >
<div class="card border-secondary p-3">
      <div class="card-header">
        <h4 class="text-center">Oder Details</h4></div>
        <?php
            $product_id=$_GET['view_id'];
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
        ?>

        <!-- card right -->
        <div class="product-content p-3">
            <h2 class="product-title"><?= $row['product_name']; ?></h2> 
        
            <div class="product-price">
                <p class="price text-success">Price : <span>Rs <?= number_format($row['product_price']); ?> /=</span></p>                       
            </div>

            <div class="product-details">
                <ul>
                    
                    <li><i class='bx bx-check-circle'></i> Category Name : <span><?= $row['category'];?></span></li>
                    <li ><i class='bx bx-check-circle'></i> Material : <span><?= $row['material'];?></span></li>
                    <li><i class='bx bx-check-circle'></i> Color : <span><?= $row['color'];?></span></li>
                    <li><i class='bx bx-check-circle'></i> Warranty : <span><?= $row['warranty_period'];?> Months</span></li>
                    <li><i class='bx bx-check-circle'></i> Dimentions : <span><?= $row['dimentions'];?></span></li>
                    <li class="text-danger"><i class='bx bx-check-circle'></i> <span ><?= $row['product_status'];?></span></li>
                </ul>
            </div>
           
        </div>


      </div>
</div>
</div>
</div>

</div>

    <?php include ("../includes/u_footer.php"); ?>
            
  </body>
</html>




