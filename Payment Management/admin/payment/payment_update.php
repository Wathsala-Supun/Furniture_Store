<?php
include "../../database/product_db.php";
include('../includes/header.php'); 



$nic=$_GET['updateid'];
$sql ="SELECT * FROM `payment` WHERE nic='$nic'";
$result= mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $name=$name=$row['name'];
    $nic=$row['nic'];
    $address=$row['address'];
    $phone=$row['phone'];
    $email=$row['email'];
    $price=$row['price'];
    $cardname=$row['cardname'];
    $cardno=$row['cardno'];
    $status=$row['status'];

if(isset($_POST['submit'])){
    
    $name=$_POST['name'];
    $nic=$_POST['nic'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $email=$_POST['price'];
    $cardname=$_POST['cardname'];
    $cardno=$_POST['cardno'];
    $status=$_POST['status'];
        


  $sql= "UPDATE `payment` SET status='$status' WHERE nic='$nic'";
  $result= mysqli_query($con , $sql);
  if($result){
    echo "Data Updated successfully";
    // header('Location: payement_read.php');
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
       

      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control"  name="name" readonly  value=<?php echo $name;?> >
      </div>
      <div class="form-group">
        <label>NIC Number</label>
        <input type="text" class="form-control" name="nic" value=<?php echo $nic;?> readonly>
      </div>
      <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control"  name="address"  readonly  value=<?php echo $address;?> >
      </div>
      <div class="form-group">
        <label>Phone</label>
        <input type="text" class="form-control"  name="phone" value=<?php echo $phone;?> readonly>
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control"  name="email"  readonly value=<?php echo $email;?> >
      </div>
      <div class="form-group">
        <label>Price</label>
        <input type="text" class="form-control" name="price" value=<?php echo $price;?> readonly>
      </div>
      <div class="form-group">
        <label>Card name</label>
        <input type="text" class="form-control" name="cardno" value=<?php echo $cardname;?> readonly>
      </div>
      <div class="form-group">
        <label>Card Number</label>
        <input type="text" class="form-control" name="cardname" readonly  value=<?php echo $cardno;?>>
      </div>
      </div>
      <div class="form-group">
        <label>Status</label>
        <select  class="form-control" placeholder="Enter Product ID" name="status">
            <option>Payment Successfull</option>
            <option>Payment Pending</option>
            <option>Payment Cancel</option>
        </select>
      </div>
      

      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      <button class="btn btn-primary my-5"><a href="product_add.php" class="text-light">Clear</a></button>

    </form>
    
    </div>

  </body>
</html>