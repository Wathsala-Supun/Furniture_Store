<?php
 include "../../database/product_db.php";
 include ("../includes/u_header.php");



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


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/view.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>product</title>
   
  </head>


  
  <body>
    
    
    <div class="card-wrapper ">
        <div class="card">

        <!-- card left -->
            <div class="product-img">
                <div class="img-display">
                    <div class="img-showcase">
                        <img src="../../images/<?= $row['product_image']; ?>" >
                    </div>
                </div>
            </div>

        <!-- card right -->
        <div class="product-content">
            <h2 class="product-title"><?= $row['product_name']; ?></h2> 
            <div class="product-rating">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star-half-alt"></i>
                 <span>4.7(21)</span>
            </div>

            <div class="product-price">
                <p class="price">Price : <span>Rs <?= number_format($row['product_price']); ?> /=</span></p>                       
            </div>

            <div class="product-details">
                <ul>
                    <li>Category Name : <span><?= $row['category'];?></span></li>
                    <li>Material : <span><?= $row['material'];?></span></li>
                    <li>Color : <span><?= $row['color'];?></span></li>
                    <li>Warranty : <span><?= $row['warranty_period'];?> Months</span></li>
                    <li>Dimentions : <span><?= $row['dimentions'];?></span></li>
                    <li><span><?= $row['product_status'];?></span></li>
                </ul>
            </div>

            <div class="purchase-info">
                <input type="number" min="0" value="1">
                <button type="button" class="btn">
                    Add to Cart <i class="fas fa-shopping-cart"></i>
                </button>
                <button class="btn btn-success"><a href="../payment/add_payment.php? view_id=<?= $row['product_id'];?>"class="text-light">Buy</a></button>
                
            </div>

            <div class="social-links">
                <p>Share At:</p>
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="#">
                    <i class="fab fa-pinterest"></i>
                </a>
            </div>
        </div>


        </div>
    </div>>
    <?php include ("../includes/u_footer.php"); ?>

</body>
</html>




