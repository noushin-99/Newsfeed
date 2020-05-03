<?php


if(!isset($_SESSION['a_email'])){
	echo"<script>window.open('login.php','_self');</script>";
	
}
else{

?>

	<div class="row">

		<div class="col-lg-12">
			<ol class="breadcrumb">
				<li class="active">
					<i class="fa fa-dashboard"></i>Dashbord/View Products
						
				</li>
			</ol>
		
		</div>

	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-money fa-fw"></i>View Product
					</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
					<table class="table table-hover table-striped table-bordered">
						<thead>
							<tr>
							<th>News Id:</th>
							<th>News Name:</th>
							<th>News  Image:</th>
							<th>Hotel  Desc:</th>
							<th>Product Delete:</th>
							<th>Product Edit:</th>
							
							</tr>
						</thead>
						<tbody>
							<?php
								$get_product="SELECT * FROM news";
								$run_get_product=mysqli_query($con,$get_product);
								while($row_get_product=mysqli_fetch_array($run_get_product)){
									$p_id=$row_get_product['id'];
									$p_title=$row_get_product['head'];
									$p_img=$row_get_product['img1'];
									$p_price=$row_get_product['d_P'];
									
						
									
									
									
							
							?>
							<tr>
							<td><?php echo $p_id;?></td>
							<td><?php echo $p_title;?></td>
							<td><img src="product_images/m/<?php echo $p_img;?>" width="60" height="80"></td>
							<td><?php echo $p_price;?></td>
							
							
							<td><a href="index.php?delete_pro=<?php echo $p_id;?>"><i class="fa fa-trash">Delete</i></a></td>
							<td><a href="index.php?edit_pro=<?php echo $p_id;?>"><i class="fa fa-pencil"></i>Edit</a></td>
							</tr>
								<?php } ?>
						</tbody>
			
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	
	
	
	
	

<?php }?>