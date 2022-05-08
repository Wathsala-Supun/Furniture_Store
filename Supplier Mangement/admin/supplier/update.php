
<?php
include "../../database/product_db.php";
include('../includes/header.php'); 

        $id=$_GET['updateid'];

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];

        $sql ="UPDATE supplier SET id='$id', name='$name', address='$address', email='$email', phone='$phone', city='$city' 
        WHERE id=$id";

        $result = mysqli_query($con,$sql);

        if($result){

            //echo"Updated Succesfully";
             header('location:read.php?message=successupdate');
        }else{
            die(mysqli_error($con));
        }
    }


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Supplier</title>
</head>
<body>
<br><br><br>
<div class ="bodyy">
<h1>Update Supplier Details</h1>
<div class="container my-5">

<form method="post">
  <div class="mb-3">
    <label >Name</label>
    <input type="text" placeholder="Enter Your Name"  class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label >Address</label>
    <input type="text" placeholder="Enter Your Address"  class="form-control" name="address">
  </div>
  <div class="mb-3">
    <label >Email</label>
    <input type="email" placeholder="Enter Your Email"  class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label >Phone Number</label>
    <input type="text" placeholder="Enter Your Phone Number"  class="form-control" name="phone">
  </div>
  <div class="mb-3">
    <label >City</label>
    <input type="text" placeholder="Enter Your City"  class="form-control" name="city">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>

</div>
  </div>
</body>
</html>