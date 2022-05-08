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
  <title>Payment Display</title>

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
  <h3> All Payement Details </h3>
  </center>
  <form action="" method="GET">
<div class="search">
<div class="input-group mb-3">
  <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?> " class="form-control" placeholder="Recipient's username" >
  <button type="submit" class="btn btn-primary"> Search </button>
</div>
</div>
    </form>



<button class="btn btn-primary my-5"> <a href="payment_report.php" class="text-light">Print Report</a> </button>


  </div>
 

  <table class="table">
  <thead>
    <tr>
        <th scope="col" >name</th>
        <th scope="col">nic</th>
        <th scope="col">address</th>
        <th scope="col">phone</th>
        <th scope="col">email</th>
        <th scope="col">price</th>
        <th scope="col">cardname</th>
        <th scope="col">cardno</th>
        <th scope="col">Status</th>
        <th scope="col">Oparatins</th>
    </tr>
  </thead>
  <tbody>
   <?php
        
        $sql ="SELECT * FROM payment";
        $result = mysqli_query($con,$sql);

        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $name=$name=$row['name'];
                $nic=$row['nic'];
                $address=$row['address'];
                $phone=$row['phone'];
                $email=$row['email'];
                $price=$row['price'];
                $cardname=$row['cardname'];
                $cardno=$row['cardno'];
                $status=$row['status'];
                echo ' <tr>

                
                <th scope="row">'.$name.'</th>
                <td>'.$nic.'</td>
                <td>'.$address.'</td>
                <td>'.$phone.'</td>
                <td>'.$email.'</td>
                <td>'.$price.'</td>
                <td>'.$cardname.'</td>
                <td>'.$cardno.'</td>
                <td>'.$status.'</td>
                
                <td>
                <button class="btn btn-primary p-2"><a href="payment_update.php? updateid='.$nic.'" class="text-light" mg-2>Update</a></button><br>
                <button class="btn btn-danger my-2 "><a href="payment__delete.php? deleteid='.$nic.'" class="text-light">Delete</a></button>
                
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
