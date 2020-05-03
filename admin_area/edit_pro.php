<?php
include("includes/db.php");
?>
<?php
	if(isset($_GET['edit_pro'])){
		$pp_id=$_GET['edit_pro'];
		$get_product="SELECT * FROM news WHERE id='$pp_id'";
		$run_get_p=mysqli_query($con,$get_product);
		$num_get_pro=mysqli_fetch_array($run_get_p);
		$p_id=$num_get_pro['id'];
		$p_title=$num_get_pro['head'];
		$p_img1=$num_get_pro['img2'];
		$p_img2=$num_get_pro['img1'];
		$p_price=$num_get_pro['s_p'];
		
		$p_desc=$num_get_pro['d_P'];
	
		}
			
		

	

?>

	
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb">
					<li class="active">
						<i class="fa fa-dashboard"></i>Dashbord/Edit Hotel
					
					</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-money fa-fw"></i>Edit Hotel Room
					</h3>
					</div>
					<div class="panel-body">
					
						<form method="post" class="form-horizontal"enctype="multipart/form-data" action="edit_pro.php">
							<div class="form-group">
								<label class="col-md-3 control-label">News Id</label>
								<div class="col-md-6">
									<input name="product_id" type="text" class="form-control" value="<?php echo $p_id;?>" required>
								</div>
							
							
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label"> Id</label>
								<div class="col-md-6">
									<input name="id" type="text" class="form-control" value="<?php echo $pp_id;?>" required>
								</div>
							
							
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Head</label>
								<div class="col-md-6">
									<input name="product_title" type="text" class="form-control" value="<?php echo $p_title;?>" required>
								</div>
							
							
							</div>
							
							<div class="form-group">
								<label class="col-md-3 control-label"> Img1</label>
								<div class="col-md-6">
									<input name="product_img1" type="file" class="form-control"  ><br/>
									<img src="product_images/m/<?php  echo $p_img1;?>" width="60" height="80">
									
								</div>
							
							
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label"> Img2</label>
								<div class="col-md-6">
									<input name="product_img2" type="file" class="form-control" >
									<br/>
									<img src="product_images/m/<?php  echo $p_img2;?>" width="60" height="80">
								</div>
							
							
							</div>
							
							
							<div class="form-group">
								<label class="col-md-3 control-label">Short Desc</label>
								<div class="col-md-6">
									<input name="product_Price" type="text" class="form-control" value="<?php echo $p_price;?>"required>
								</div>
							
							
							</div>
							
							<div class="form-group">
								<label class="col-md-3 control-label"> Desc</label>
								<div class="col-md-6">
									<textarea name="product_desc" cols="19" rows="6" class="form-control" required>
									<?php echo $p_desc;?>
									</textarea>
								</div>
							
							</div>

							<div class="form-group">
								<label class="col-md-3 control-label"></label>
								<div class="col-md-6 text-center">
									<input name="submit" type="submit" class="btn btn-primary" required>
								</div>
							
							
							</div>
							
							
						
						</form>
					
					</div>
				</div>
			
			</div>
		
		</div>
	
	<?php
if(isset($_POST['submit'])){
	$pro_id=$_POST['product_id'];
	$id=$_POST['id'];
	$pro_title=$_POST['product_title'];
	
	$pro_price=$_POST['product_Price'];
	
	$pro_desc=$_POST['product_desc'];
	
	$pro_img1=$_FILES['product_img1']['name'];
	$pro_img2=$_FILES['product_img2']['name'];
	
	
	$tmp_pro_img1=$_FILES['product_img1']['tmp_name'];
	$tmp_pro_img2=$_FILES['product_img2']['tmp_name'];
	
	
	move_uploaded_file($tmp_pro_img1,"product_images/m/$pro_img1");
	move_uploaded_file($tmp_pro_img2,"product_images/m/$pro_img2");
	
	$update="UPDATE news SET id='$pro_id',head='$pro_title',s_p='$pro_price',d_P='$pro_desc',img1='$pro_img1',img2='$pro_img2'WHERE id='$id'";

	
	
	
	$run_update=mysqli_query($con,$update);
	if($run_update){
		echo"<script>alert('Hotel has been updateed !!!success fully');</script>";
		echo"<script>window.open('index.php?view_products','_self');</script>";
	}else{
		echo"<script>alert('database problem');</script>";
		
	}
	
}




?>
	




	