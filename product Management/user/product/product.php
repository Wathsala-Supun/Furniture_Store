
<?php
    include "../../database/product_db.php";
    include ("../includes/u_header.php");
    
      
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page view</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>  
    <h4 style="margin-top:0px;" class="text-center text-light bg-info p-1 " >Products</h4>
    <div class="containr-fluid">
        <div class="row">
            <!-- Category filter -->
            <div class="col-lg-2" >
                
            <h5 class="text-info text-center my-1">Select Category</h5>
                <ul class="list-group ">
                    <?php
                    $sql = "SELECT category FROM products";
                    $result = $con->query($sql);

                    while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item my-2 bg-light" style="width:300px">
                        <div class="form-check ">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check" name="check" value="<?= $row['category'];?>" id="category"><?= $row['category'];?>
                            </label>
                        </div>
                    </li>
                    <?php } ?>
                    </ul>
    
            </div>
            

                <!-- All Product display -->
            <div class="col-lg-10 my-4">
                
                <div class="text-center">
                    <img src="../images/loader1.gif" id="loader" width="100" style="display:none;" >
                </div>
                    <div class="row" id="result1">
                            <?php
                                $sql = "SELECT * FROM products";
                                $result=$con->query($sql);
                                while($row=$result->fetch_assoc()){
                            ?>
                           
                           
                           <div class="col-md-3 mb-5">
                                <div class="card-deck ">
                                    <div class="card border-secondary">
                                        <img src="../../images/<?= $row['product_image']; ?>" class="card-img-top" style="width:368px; height:330px;" >

                                        <div class="card-img-overlay">
                                            <h5 style="margin-top:280px;" class="text-light bg-info text-center rounded p-1" ><?= $row['product_name']; ?></h5>   
                                        </div>   
                                        <div class="card-body">
                                            <h4 class="card-title text-danger">Price : <?= number_format($row['product_price']); ?>/-</h4>
                                                <p>
                                                    Status : <?= $row['product_status'];?><br>
                                                    Material : <?= $row['material'];?><br>
                                                    Color : <?= $row['color'];?><br>
                                                </p>
                                               
                                                
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <button class="btn btn-success btn-block "><a href="product_view.php? view_id=<?= $row['product_id'];?>"class="text-light">View More</a></button>
                            </div> 
                        <?php } ?>
                    </div>
            </div>
        </div>
        <?php include ("../includes/u_footer.php"); ?>
    </div>


        <!-- Filter category name  -->
        <script type="text/javascript">
        $(document).ready(function(){
            $(".product_check").click(function(){
                $("#loader").show();

                var action = 'data';
                var category = get_filter_text('category');
                var meterial = get_filter_text('material ');
                var color = get_filter_text('color');

                $.ajax({
                    url:'action.php',
                    method:'POST',
                    data:{action:action, category:category, meterial:meterial, color:color},
                    success:function(response){
                        $("#result1").html(response);
                        $("#loader").hide();
                        $("#textchange").text("Filterd Products");
                    }

                });
            });
            function get_filter_text(text_id){
                var filterData = [];
                $('#'+text_id+':checked').each(function(){
                    filterData.push($(this).val());
                });
                return filterData;
            }
        });
    </script>  
    
   
</body>

</html>

