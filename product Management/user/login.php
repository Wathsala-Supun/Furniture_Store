
	<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>product</title>
   
<title>login</title>
</head>
<body>
<div class="container my-5">
    <div class="card border-secondary p-4">
		<div class="card-header">
			<h4 class="text-center"> User Login </h4>
		</div>
				<form method="POST" action="login2.php" enctype="multipart/form-data">
					<div class="form-group" >
					<div class="form-group">
						<label>Enter User Name :</label>
						<input type="text" class="form-control" name="uname" placeholder="Enter User Name">
					</div>
					<div class="form-group">
						<label>Enter Password :</label>
						<input type="password" class="form-control"  name="password" placeholder="Enter Password">
					</div>
					<button type="submit" class="btn btn-primary" name="submit"  value="Login">Submit</button>
				</form>
	</div>
</div>


<div class="container my-5">
    <div class="card border-secondary p-4">
		<div class="card-header">
			<h4 class="text-center"> Admin Login </h4>
		</div>
				<form method="POST" action="login2.php" enctype="multipart/form-data">
					<div class="form-group" >
					<div class="form-group">
						<label>Enter User Name :</label>
						<input type="text" class="form-control" name="name" placeholder="Enter User Name">
					</div>
					<div class="form-group">
						<label>Enter Password :</label>
						<input type="password" class="form-control"  name="password" placeholder="Enter Password">
					</div>
					<button type="submit" class="btn btn-primary" name="submit"  value="Login">Submit</button>
				</form>
	</div>
</div>

</body>
</html>
<?php
session_destroy();
?>

