


<?php


if(!isset($_SESSION['a_email'])){
	echo"<script>window.open('login.php','_self');</script>";
	
}
else{

?>


<div class="row">

	<div class="col-lg-12">
		<h1 class="page-header">Dashboard</h1>
		<ol class="breadcrumb">
			<li class="active"><i class="fa fa-deshboard"></i> Dashboard</li>
		</ol>
	</div>

</div>

<div class="row">

	<div class="col-lg-3 col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-tasks fa-sx"></i>"
					
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">
							<div class="">News<span class="badge"><?php echo $num_products;?></span></div>
						</div>
					
					</div>
				
				</div>
			
			</div>
			
			<a href="index.php?view_products">
				<div class="panel-footer">
					<span class="pull-left text-center">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		
		</div>
		
		
	
	
	</div>
	
	<!--customers-->
	
	
	
		<!--Product Categories-->
	
	
	
			<!--Product Orders-->
	
	

</div>

<div class="row">
	
<div class="col-md-12">
	<div class="panel">
		<div class="panel-body">
			<div class="mb-md thumb-info">
				<center><img src="admin_images/IMG_9477.jpg" class="rounded img-responsive" style="width:60%;height: auto;"></center>
				<div class="thumb-info-title">
					<span class="thumb-info-inner"><?php echo $admin_name;?></span><br/>
					<span class="thumb-info-type"><?php echo $admin_email;?></span>
				
				</div>
			</div>
			<div class="mb-md">
				
				<hr class="dotted short">
				<h5>about us</h5>
				
		
				
				
				
			</div>
		</div>
	</div>

</div>
</div>

<?php }?>



