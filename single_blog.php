<?php include('inc/header.php');?>

<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];

	 $sql="SELECT * FROM news where id='$id'";

                        $run=mysqli_query($con,$sql);

                        while($row=mysqli_fetch_array($run)){
                          $head=$row['head'];
                          $s_p=$row['d_P'];
                          $cat_id=$row['id'];
                          $img=$row['img1'];
                          $cat_name=$row['cat_name'];



?>
<div class="container">
	<div class="center">
		<center><h1><?php echo $head?></h1></center>

		<div class="col-md-10">
			<center><img style="width:50%; height: auto;" src="News/<?php echo $img;?>"></center>

			<p><?php echo $s_p;?></p>
		</div>

	</div>
<?php }}?>

	<div class="container size">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
		<form class="form-control" action="single_blog.php" method="post">
			<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="name" id="fullname" placeholder="Full Name"  class="form-control">
						<label for="fullname">Email</label>
						<input type="email" name="email" id="fullname" placeholder="Full Name"  class="form-control">
						<label for="fullname">Messege:</label>
					
						<textarea  name="name" class="form-control"></textarea>
						
						<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">SignUp</button>
					</div>
						
					</div><!--full name-->


		</form>

	</div>
</div>
</div>





</div>


<?php include('inc/footer.php');?>