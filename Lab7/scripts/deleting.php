<?php
	include("connect.php");
	
	if((isset($_GET['id']))&&is_numeric($_GET['id'])){
		$id = $_GET['id'];
		$sql = "delete from pilkarz where id='$id'";
		if(mysqli_query($conn,$sql)){
		echo	'<div class="alert alert-success">pilkarz został usuniety</div>';
		}else {
						echo '<div class="alert alert-danger">bład usuwania pilkarza: ' . mysqli_error($conn)."</div>";
					}
	}
	mysqli_close($conn);
?>