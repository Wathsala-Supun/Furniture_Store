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
 
  
 
  $sql= "INSERT INTO `payment` (`nic`,`name`, `address`, `phone`, `email`,`cardname`, `cardno`, `month`, `year`, `cvc`) VALUES ( '$nic','$name','$address','$phone','$email','$cardname','$cardno','$month','$year','$cvc')";
  $result= mysqli_query($con , $sql);
  if($result){
    header('location:add_payment2.php?message=successadd');
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

    <script>
        function validateForm() {
          var phone = /^\d{10}$/;
         if(inputtxt.value.match(phone))
        {
      return true;
        }
      else
        {
        alert("message");
        return false;
        }
          }
        
    </script>
  </head>
  <body>
  <h4 style="margin-top:0px;" class="text-center text-light bg-info p-1 " >Payment</h4>
    <div class="container">
      <div class="card border-secondary p-3">
          <div class="card-header bg-success">
            <h4 class="text-center text-light">Add User Details </h4>
          </div>
              <form method="post" enctype="multipart/form-data" onsubmit="return validateForm()"name="myForm">
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
                                <input type="text" class="form-control" placeholder="ex: No 10/c peradeniya road , kandy"  name="address" required>
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
      
      <button type="submit" class="btn btn-primary" name="submit">Save</button>
      <button class="btn btn-primary my-5"><a href="card.php" class="text-light">Clear</a></button>
      
    
      
    </form>
      
      
    </div>
    
      </div>
        </div>
</body>
</html>