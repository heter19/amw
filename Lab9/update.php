<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Piłkarze - dodaj</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/style.css" />     
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <title>Programowanie serwisów www</title> 
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script type ="text/javascript" src = "scripts/text.js"></script>  
 
  </head>
  <body class="container-fluid">
	<header>
	<center>
    <img src="images/pp.jpg" alt="Piłka">
	</center>
	</header>
	<br>
	<nav class="navbar navbar-inverse">
	 <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Blog Piłkarski</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="index.php">Home</a></li>
      <li><a href="add.php">Dodaj</a></li>
      <li><a href="register.php">Rejestruj</a></li>
      <li><a href="login.php">Loguj</a></li>
    </ul>
  </div>
	</nav>
	<main>
	<center>
    <h2 id="xd" class = "display-4">Dodawanie piłkarzy</h2>
    </center>
<?php
include("connect.php");
	$id=$_POST['id'];
	$imie = $_POST['name'];
	$nazwisko = $_POST['surname'];
	$kraj = $_POST['country'];
	$pozycja = $_POST['position'];
	

		
	$sql="update Pilkarz set Imie='$imie', Nazwisko='$nazwisko', Kraj = '$kraj', Pozycja='$pozycja' where id ='$id'";
	if ($conn->query($sql) === TRUE) {
    echo "<div class='alert alert-success'>Rekord aktualizacji</div>";
} else {
    echo "<div class='alert alert-danger'>Błąd aktualizacji rekordu: " . $conn->error."</div>";
}
	
$conn->close();
?>
</main>			
        </body>
  <link rel="Stylesheet" href="style.css"/>
</html>