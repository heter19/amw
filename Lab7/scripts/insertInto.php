<?php
	include("connect.php");		
	$name = $_POST['name'];
	$surname = $_POST['surname']; 
	$country = $_POST['country'];
	$position = $_POST['position'];
	


		
        $sql = "insert into `pilkarz` (`id`, `Kraj`, `Imie`,`Nazwisko`, `Pozycja`) values(null,'$country','$name','$surname','$position')";
	if (mysqli_query($conn, $sql)) {
		echo '<div class="alert alert-success">pilkarz został dodany</div>';
	} else {
		echo '<div class="alert alert-danger">bład dodawania pilkarza: ' . mysqli_error($conn)."</div>";
	}
    


	

	mysqli_close($conn);
?>