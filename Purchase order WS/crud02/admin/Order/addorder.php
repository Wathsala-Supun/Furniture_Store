<?php include('connect.php'); ?>
<?php

    if(isset($_POST['submit'])){

        $price = $_POST['price'];
        $quantity =$_POST['quantity'];
        $size = $_POST['size'];
        $description = $_POST['description'];

      $sql ="INSERT INTO p_order (price,quantity,size,description)VALUES('$price','$quantity','$size','$description')";

        $res = mysqli_query( $conn , $sql);

        if($res){
            header('location:readorder.php');
        }else{
            die(mysqli_error($conn));
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchrse Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container my-5">

<form method="post">
  <div class="mb-3">
    <label >Price</label>
    <input type="text" placeholder="Enter Your Price "  class="form-control" name="price">
  </div>
  <div class="mb-3">
    <label >Quantity</label>
    <input type="text" placeholder="Enter Your Quantity"  class="form-control" name="quantity">
  </div>
  <div class="mb-3">
    <label >Size</label>
    <input type="text" placeholder="Enter Your Size"  class="form-control" name="size">
  </div>
  <div class="mb-3">
    <label >Description</label>
    <input type="text" placeholder="Enter Your Description"  class="form-control" name="description">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

  </div>



</body>
</html>