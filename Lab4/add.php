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
  <title>Pilkarze</title> 
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
      <li ><a href="#">Home</a></li>
      <li class="active"><a href="add.php">Dodaj</a></li>
      <li><a href="register.php">Rejestruj</a></li>
      <li><a href="login.php">Loguj</a></li>
    </ul>
  </div>
	</nav>
	<main>
	<center>
    <h2 id="xd" class = "display-4">Dodawanie piłkarzy</h2>
    </center>

				<form action="insert.php" method = "post">
				<h1 class="display-3">Dodaj piłkarza</h1>
				<hr>
					
					<label for="name">Imie:</label>
					<input type="text" name = "name" class="form-control" placeholder="Podaj imie:"><br>
					<label for="surname">Nazwisko:</label>
					<input type="text" name = "surname" class="form-control" placeholder="Podaj nazwisko:"><br>
					<label for="kraj">Kraj:</label>
					<input type="text" name = "country" class="form-control" placeholder="Podaj kraj:"><br>
					<label for="position">Pozycja:</label>
					<input type="text" name = "position" class="form-control" placeholder="Podaj pozycje:"><br>
					<input type="submit" value="dodaj" class="btn btn-dark">
				</form>			
</main>			
        </body>
 
</html>