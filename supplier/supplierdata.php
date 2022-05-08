
<?php
include 'connect.php';

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];

        if(empty($name) && empty($address) && empty($email) 
	&& empty($phone) && empty($city) ){ 

        
        header("location: supplier.php?error=AllInputsEmpty");
		exit();
	}
	if(empty($name)){
		header("location: supplier.php?error=EmptyName");
		exit();
	}
	if(empty($address)){
		header("location: supplier.php?error=EmptyAddress");
		exit();
	}
	if(empty($email)){
	        header("location: supplier.php?error=EmptyEmail");
		exit();
	}
	if(empty($phone)){
		header("location: supplier.php?error=EmptyPhone");
		exit();
	}
	if(empty($city)){
		header("location: supplier.php?error=EmptyCity");
		exit();
	}

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

		header("location: supplier.php?error=InValidEmail");
		exit();
	}

        $sql ="INSERT INTO supplier (name,address,email,phone,city)VALUES('$name','$address','$email','$phone','$city')";

        $result = mysqli_query($conn,$sql);

        if($result){
             header('location:profile.php?message=successadd');
        }else{
            die(mysqli_error($conn));
        }
    }
    mysqli_close($conn);

?>





