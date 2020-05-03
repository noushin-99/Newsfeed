
<?php
session_start();
include("includes/db.php");
?>

<!DOCTYPE html>

<html lang="cm">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Area Of Bindaas Shop</title>
		<link rel="stylesheet" href="css/bootstrap-337.min.css">
		<link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/login.css">
	</head>
<body>

	<div class="container">
	
		<form action="" class="form-login " method="post">
			<h2 class="form-login-heading">Admin Login</h2>
			
			<input type="text" class="form-control" placeholder="Email Address" name="admin_email">
			<input type="password" class="form-control" placeholder="password" name="admin_pass">
			<button type="submit" class="btn btn-primary btn-block" name="admin_login">LogIn</button>
		</form>
	
	</div>

</body>

<?php

if(isset($_POST['admin_login'])){
	$a_email=mysqli_real_escape_string($con,$_POST['admin_email']);
	$a_pass=mysqli_real_escape_string($con,$_POST['admin_pass']);
	
	$sql_a_login="SELECT * FROM admin WHERE email='$a_email' AND password='$a_pass'";
	$run_login=mysqli_query($con,$sql_a_login);
	
	$count=mysqli_num_rows($run_login);
	
	if($count==1){
		$_SESSION['a_email']=$a_email;
		echo"<script>alert('wellcome to back!!!! our admin panel...');</script>";
		echo"<script>window.open('index.php?dashboard','_self');</script>";
		
	}else{
		echo"<script>alert('sorry your password or email are wrong!!!!!');</script>";
		
	}
	
	
	
}



?>