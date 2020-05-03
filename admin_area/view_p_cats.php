<?php
include("includes/db.php");
?>
	
	
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb">
					<li class="active">
						<i class="fa fa-dashboard"></i>Dashbord/View Product Categories
					
					</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-money fa-fw"></i>View Product Categories
					</h3>
					</div>
					<div class="panel-body">
						<form method="post" class="form-horizontal"enctype="multipart/form-data" action="insert_p_cat.php">
							<table class="table table-hover table-striped table-bordered">
						<thead>
							<tr>
								<th>User Id</th>
								<th>User Name</th>
								<th>User Email</th>
								<th>User City</th>
								<th>User Place</th>
								<th>User Date Of Brith</th>
								<th>User Contact</th>
								
							
							</tr>
						</thead>
						<tbody>
							<?php
								$get_product="SELECT * FROM rigistration";
								$run_get_product=mysqli_query($con,$get_product);
								while($row_get_product=mysqli_fetch_array($run_get_product)){
									$p_id=$row_get_product['id'];
									$p_title=$row_get_product['name'];
									$p_email=$row_get_product['email'];
									$p_city=$row_get_product['city'];
									$p_place=$row_get_product['place'];
									$p_contact=$row_get_product['contact'];
									$p_key=$row_get_product['dob'];
									
									
									
							
							?>
							<tr>
							<td><?php echo $p_id;?></td>
							<td><?php echo $p_title;?></td>
							
							<td><?php echo $p_email;?></td>
							
					
							<td><?php echo $p_city;?></td>
							<td><?php echo $p_place;?></td>
							<td><?php echo $p_contact;?></td>
							<td><?php echo $p_key;?></td>
							
							
							<td><a href="index.php?delete_cc=<?php echo $p_id;?>"><i class="fa fa-trash">Delete</i></a></td>
							
							</tr>
								<?php } ?>
						</tbody>
					
					
					</table>
						</form>
					</div>
				</div>
			</div>
		</div>