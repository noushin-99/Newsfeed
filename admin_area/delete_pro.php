<?php


if(!isset($_SESSION['a_email'])){
	echo"<script>window.open('login.php','_self');</script>";
	
}
else{

?>
<?php
	if(isset($_GET['delete_pro'])){
		$delete_pro=$_GET['delete_pro'];
		$delete="DELETE FROM news WHERE id='$delete_pro'";
		$run_delete=mysqli_query($con,$delete);
		
		if($run_delete){
			echo"<script>alert('My Product is DELETE success!!!');</script>";
			echo"<script>window.open('index.php?view_products','_self');</script>";
		}
		
	}



?>



<?php }?>