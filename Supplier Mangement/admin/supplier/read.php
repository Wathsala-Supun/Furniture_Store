<?php 
include "../../database/product_db.php";
include('../includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Read</title>

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
  <h3> Mange Supplier </h3>
  </center>
  <form action="" method="GET">
<div class="search">
<div class="input-group mb-3">
  <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?> " class="form-control" placeholder="Recipient's username" >
  <button type="submit" class="btn btn-primary"> Search </button>
</div>
</div>
    </form>
<button class="btn btn-success my-5"> <a href="supplier.php" class="text-light">Add Supplier</a> </button>
<button class="btn btn-primary my-5"> <a href="report.php" class="text-light">Print Report</a> </button>

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
  ?>
  </div>
  <?php endif ?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">City</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php
        
        $sql ="SELECT * FROM supplier";

        $result = mysqli_query($con,$sql);

        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $id =$row['id'];
                $name=$row['name'];
                $address=$row['address'];
                $email=$row['email'];
                $phone=$row['phone'];
                $city=$row['city'];

                echo ' <tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$address.'</td>
                <td>'.$email.'</td>
                <td>'.$phone.'</td>
                <td>'.$city.'</td>
                <td>
              
                <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
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