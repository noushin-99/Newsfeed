<?php
session_start();
include("includes/db.php");
include("includes/header.php");
?>
<?php


if(!isset($_SESSION['a_email'])){
	echo"<script>window.open('login.php','_self');</script>";
	
}
else{
	
	$a_session=$_SESSION['a_email'];
	
	$get_admin="SELECT * FROM admin WHERE email='$a_session'";
	$run_admin=mysqli_query($con,$get_admin);
	$admin_property=mysqli_fetch_array($run_admin);
	$admin_id=$admin_property['id'];
	$admin_name=$admin_property['name'];
	$admin_img=$admin_property['img'];
	$admin_email=$admin_property['email'];
	
	
	
	$hotel="SELECT * FROM news";
	$run_hotels=mysqli_query($con,$hotel);
	$num_products=mysqli_num_rows($run_hotels);
	
	
	
	
?>
	<body>
		<div class="wrapper">
			<?php include("includes/sidebar.php");?>
			<div class="page-wrapper">
				<div class="container-fluid">
					<?php 
						if(isset($_GET['dashboard'])){
							include("dashboard.php");
							
						}
						if(isset($_GET['insert_product'])){
							include("insert_product.php");
							
						}
						
						if(isset($_GET['view_products'])){
							include("view_products.php");
							
						}
						if(isset($_GET['delete_pro'])){
							include("delete_pro.php");
							
						}
						if(isset($_GET['edit_pro'])){
							include("edit_pro.php");
							
						}

						

						

						
						
						
					?>
		
				</div>
		
			</div>
		
		</div>
		
	
		<script src="js/jquery-331.min.js"></script>
		<script src="js/bootstrap-337.min.js"></script>
	</body>
	
</html>
<?php }?>