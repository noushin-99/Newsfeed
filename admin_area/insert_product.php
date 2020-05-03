<?php
include("includes/db.php");
?>

	
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb">
					<li class="active">
						<i class="fa fa-dashboard"></i>Dashbord/Insert Products
					
					</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-money fa-fw"></i>Insert Product
					</h3>
					</div>
					<div class="panel-body">
					
						<form method="post" class="form-horizontal"enctype="multipart/form-data" action="insert_product.php">
							<div class="form-group">
								<label class="col-md-3 control-label">Head:</label>
								<div class="col-md-6">
									<input name="product_title" type="text" class="form-control" required>
								</div>
							
							
							</div>
							
							
							<div class="form-group">
								<label class="col-md-3 control-label">Product Img1</label>
								<div class="col-md-6">
									<input name="product_img1" type="file" class="form-control" >
								</div>
							
							
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Product Img2</label>
								<div class="col-md-6">
									<input name="product_img2" type="file" class="form-control" >
								</div>
							
							
							</div>


							<div class="form-group">
								<label class="col-md-3 control-label">Category</label>

							 <select class=" col-md-6" id="blood_group" name="blood_group" required>
               					
		               			 <option value="3">National</option>
				                <option value="4">International</option>
				                <option value="5">Entertainment</option>
				                <option value="6">Sports</option>
				                <option value="7">Audio & Video</option>
				          
				              </select>
				              </div>
									
									
									<div class="form-group">
										<label class="col-md-3 control-label">Short Description:</label>
										<div class="col-md-6">
											<input name="product_Price" type="text" class="form-control" required>
										</div>
									
									
							</div>
							
							<div class="form-group">
								<label class="col-md-3 control-label"> Desc</label>
								<div class="col-md-6">
									<textarea name="product_desc" cols="19" rows="6" class="form-control" required></textarea>
								</div>
							
							
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label"></label>
								<div class="col-md-6 text-center">
									<input name="submit" type="submit" class="btn btn-primary" value="Insert Product"required>
								</div>
							
							
							</div>
							
							
						
						</form>
					
					</div>
				</div>
			
			</div>
		
		</div>
	
	


<?php
if(isset($_POST['submit'])){
	
	$pro_title=$_POST['product_title'];
	
	$pro_price=$_POST['product_Price'];
	$pro_bload=$_POST['blood_group'];

	$pro_desc=$_POST['product_desc'];
	
	$pro_img1=$_FILES['product_img1']['name'];
	$pro_img2=$_FILES['product_img2']['name'];
	
	
	$tmp_pro_img1=$_FILES['product_img1']['tmp_name'];
	$tmp_pro_img2=$_FILES['product_img2']['tmp_name'];
	
	
	move_uploaded_file($tmp_pro_img1,"product_images/m/$pro_img1");
	move_uploaded_file($tmp_pro_img2,"product_images/m/$pro_img2");
	

	

	$insert="INSERT INTO news(head,cat_id, s_p, d_P, img1, img2) VALUES ('$pro_title','$pro_bload','$pro_price','$pro_desc','$pro_img1','$pro_img2')";
	
	
	
	$run_insert=mysqli_query($con,$insert);
	if($run_insert){
		echo"<script>alert('News has been inserted !!!success fully')</script>";
		echo"<script>window.open('index.php?view_products','_self')</script>";
	}else{
		echo"<script>alert('database problem');</script>";
		
	}
	
}




?>
