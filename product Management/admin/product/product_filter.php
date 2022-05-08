<?php
include "../../database/product_db.php";
include('../includes/header.php');  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <title>Product Display</title>
  
 
</head>
<body>
<br><br><br><br>
<div class="container">
  <center>
    <br>
  <h3> Manage Product </h3>
  </center>
    <form action="" method="GET">
        <div class="input-group mb-3">
            <select name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
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
             <button type="submit" class="btn btn-primary">Search</button>

        </div>
    </form>

                
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col" >Product ID</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Category</th>
                                <th scope="col">price</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Warrenty</th>
                                <th scope="col">Meterial</th>
                                <th scope="col">Dimention</th>
                                <th scope="col">Color</th>
                                <th scope="col">Oparatins</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                 
                                   if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM products WHERE CONCAT(category) LIKE '%$filtervalues%' ";
                                        $result = mysqli_query($con, $query);

                                        if(mysqli_num_rows( $result) > 0)
                                        {
                                            foreach( $result as $row)
                                            {
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
                                                echo ' <tr>

                                                <td>'.$product_id.'</td>
                                                <td>'.$product_name.'</td>
                                                <td>'.$category.'</td>
                                                <td>'.$product_price.'</td>
                                                <td><img src="../../images/'.$row['product_image'].'" class="card-img-top" style="width: 150px; height: 150px;" ></td>
                                                <td>'.$product_status.'</td>
                                                <td>'.$warranty_period.'</td>
                                                <td>'.$material.'</td>
                                                <td>'.$dimentions.'</td>
                                                <td>'.$color.'</td>
                                                <td>
                                                <button class="btn btn-primary p-2"><a href="product_update.php? updateid='.$product_id.'" class="text-light" mg-2>Update</a></button><br>
                                                <button class="btn btn-danger my-2 "><a href="product_delete.php? deleteid='.$product_id.'" class="text-light">Delete</a></button>
                                                </td>
                                                <tr>';
                                              
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    
            </div>
        </div>
    </div>


    

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>