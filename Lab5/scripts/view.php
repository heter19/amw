<?php
	include("connect.php");
	$id=$_GET['id'];
$sql="select * from Pilkarz where id ='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
   


$conn->close();
?>
