<?php


if(!isset($_SESSION['a_email'])){
	echo"<script>window.open('login.php','_self');</script>";
	
}
else{

?>
<?php
	if(isset($_GET['delete_cc'])){
		$delete_pro_c=$_GET['delete_cc'];
		$delete="DELETE FROM rigistration WHERE id='$delete_pro_c'";
		$run_delete=mysqli_query($con,$delete);
		
		if($run_delete){
			echo"<script>alert('My customer is DELETE success!!!');</script>";
			echo"<script>window.open('index.php?view_p_cats','_self');</script>";
		}else{
			
			echo "<script>alert('not found');</script>";
		}
		
	}



?>



<?php }?>