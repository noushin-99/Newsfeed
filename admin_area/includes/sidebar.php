
<?php


if(!isset($_SESSION['a_email'])){
	echo"<script>window.open('../login.php','_self');</script>";
	
}
else{
?>


<nav class="navbar navbar-inverse navbar-fixed-top">

	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-exl-collapse.">
			<span class="sr-only">Toggole Navigation</span>
			<span class="icon-bar">Toggole Navigation</span>
			<span class="icon-bar">Toggole Navigation</span>
			<span class="icon-bar">Toggole Navigation</span>
		</button>
		
		<a href="index.php?dashbord" class="navbar-brand">Admin Area</a>
	
	</div>
	<ul class="nav navbar-right top-nav ">
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-user"></i><?php echo $admin_name;?><b class="caret"></b>
			
			</a>
			<ul class="dropdown-menu">
				<li><a href="index.php?user_profile"><i class="fa fa-fw fa-user"></i>Profile</a></li>
				<li><a href="index.php?view_products"><i class="fa fa-fw fa-user"></i>Products<span class="badge"><?php echo $num_products;?></span></a></li>
				<li><a href="index.php?view_customers"><i class="fa fa-fw fa-user"></i>Customer<span class="badge"><?php echo $num_customers;?></span></a></li>
				<li><a href="index.php?view_cats"><i class="fa fa-fw fa-user"></i>Products_categories<span class="badge"><?php echo $products_cat;?></span></a></li>
				<li><a href="logout.php"><i class="fa fa-fw fa-user"></i>Log Out</a></li>
				
			</ul>
		
		</li>
	
	</ul>
	<div class="collapse navbar-collapse navbar-exl-collapse">
		<ul class="nav navbar-nav side-nav">
			<li><a href="index.php?dashboard"><i class="fa fa-fw fa-dashboard"></i>Dashboard</a></li>
				
				
				
				
				
				
				
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-user"></i>Hotel<b class="caret"></b>
			
			</a>
			<ul class="dropdown-menu">
				<li>
							<a href="index.php?insert_product">Insert University</a></li><li>
							<a href="index.php?view_products ">View Universitys</a>
						</li>
				
			</ul>
		
		</li>
		
		
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-user"></i>Users<b class="caret"></b>
			
			</a>
			<ul class="dropdown-menu">
				<li>
				
				<a href="index.php?view_p_cats ">View Users</a>
				</li>
			</ul>
		
		</li>
		
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-user"></i> Slides<b class="caret"></b>
			
			</a>
			<ul class="dropdown-menu">
				<li>
							<a href="index.php?insert_slide">Insert Slide</a>
							<a href="index.php?view_slides ">View Slides</a>
						</li>
					
			</ul>
		
		</li>
		
		
		
		
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-user"></i> Category<b class="caret"></b>
			
			</a>
			<ul class="dropdown-menu">
				<li>
							<a href="index.php?insert_cat">Insert Category</a>
							<a href="index.php?view_cats ">View  Categoris</a>
						</li>
			</ul>
		
		</li>
		
		
		<li>
			
			<a href="index.php?view_customers ">
			<i class="fa fa-fw fa-user"></i> View  Customers</a>
		</li>
		
		<li>
			
			<a href="index.php?view_orders ">
			<i class="fa fa-fw fa-pencil"></i> View  Orders</a>
		</li>
		<li>
			
			<a href="index.php?view_payments ">
			<i class="fa fa-fw fa-money"></i> View  Payments</a>
		</li>
		
		
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-user"></i> users<b class="caret"></b>
			
			</a>
			<ul class="dropdown-menu">
				<li>
							<a href="index.php?insert_user">Insert Category</a>
							<a href="index.php?view_users ">View  Categoris</a>
							<a href="index.php?view_users_profile=<?php echo $admin_id;?> ">Edit Users Profile</a>
						</li>
			</ul>
		
		</li>
		<li>
			
			<a href="logout.php ">
			<i class="fa fa-fw fa-pwoer-off"></i>Log Out</a>
		</li>
		
		
				
				
				
				
				
				
				
				
				
				
				
				
				
				
		</ul>
	
	</div>

</nav>
<?php }?>