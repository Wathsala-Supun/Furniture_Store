<?php
 include "../../database/product_db.php";

    if(isset($_POST['action'])){
        $sql = "SELECT * FROM products WHERE category !=''";
        if(isset($_POST['category'])){
            $category = implode("','", $_POST['category']);
            $sql .= "AND category IN('".$category."')";     
        }
       

        $result = $con->query($sql);
        $output='';

        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $output .='  <div class="col-md-3 mb-5">
                <div class="card-deck ">
                    <div class="card border-secondary">
                        <img src="../images/'.$row['product_image'].'" class="card-img-top" style="width:368px; height:330px;" >

                        <div class="card-img-overlay">
                            <h5 style="margin-top:280px;" class="text-light bg-info text-center rounded p-1" >'. $row['product_name'].'</h5>   
                        </div>   
                        <div class="card-body">
                            <h4 class="card-title text-danger">Price : '.number_format($row['product_price']).'/-</h4>
                                <p>
                                    Status :'. $row['product_status'].'<br>
                                    Material :'. $row['material'].'<br>
                                </p>
                                <a href="#" class="btn btn-success btn-block">View More</a>
                        </div>
                    </div>
                </div>
            </div> ';
            }
        }
        else{
            $output = "<h3> No product Found!</h3>";
        }
        echo $output;
        
    }


?>