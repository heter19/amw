<?php include("scripts/server.php")?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Piłkarze</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style/style.css" />     
  <meta charset="utf-8"> 
  <script src="https://code.jquery.com/jquery-3.3.1.js"> </script>
 <script src = "scripts/refreshing.js"></script>
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
      <li ><a href="#">Home</a></li>
      <li><a href="add.php">Dodaj</a></li>
      <li><a href="rejestruj.php">Rejestruj</a></li>
      <li class="active"><a href="loguj.php">Loguj</a></li>
    </ul>
  </div>
	</nav>
			
		
		<hr>
		<main id = "main" class ="container-fluid">		
			<center >
			<div class='alert alert-secondary'>
				<form action = "loguj.php" method="post" class="form-group">
				<?php include('scripts/errors.php'); ?>
				<label for="login">Login:</label>
				<input type="text" name = "login" class="form-control" placeholder="Podaj login:"><br>
				<label for="pass">Hasło:</label>
				<input type = "password" name = "pass" class="form-control" placeholder="Podaj Hasło:"><br>
				<button type="submit" class="btn btn-dark" name="login_user">Loguj</button>
				</form>
				</div>
			</center>
		</main>
		
		<script src="scripts/slider.js"></script>
		<script type= ></script>
	</body>
</html>