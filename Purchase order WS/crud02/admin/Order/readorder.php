<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
.btn1{
    background-color:green;
}
.btn2{
    background-color:red;
}
        </style>
</head>
<body>

<div class="container">
    <button class="btn btn-primary my-5"><a href="addorder.php" class ="text-light"> Add Neww </a>
 </button>

 <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Price</th>
      <th scope="col">Quntity</th>
      <th scope="col">Size</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>

  <?php
        
        $sql ="SELECT * FROM p_order";

        $res = mysqli_query($conn,$sql);

        if($res){
            while($row = mysqli_fetch_assoc($res)){
                $id =$row['id'];
                $price=$row['price'];
                $quantity=$row['quantity'];
                $size=$row['size'];
                $description=$row['description'];
                
                echo ' <tr>
                <th scope="row">'.$id.'</th>
                <td>'.$price.'</td>
                <td>'.$quantity.'</td>
                <td>'.$size.'</td>
                <td>'.$description.'</td>

                <td>
              
                <button class ="btn1"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
                <button class="btn2"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
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