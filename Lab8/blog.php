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
      <li class="active"><a href="#">Home</a></li>
      <li><a href="add.php">Dodaj</a></li>
      <li><a href="register.php">Rejestruj</a></li>
      <li><a href="login.php">Loguj</a></li>
	  <li><a href="react.html">React</a></li>
    </ul>
  </div>
	</nav>
	<main>
	<center>
    <h2 id="xd" class = "display-4">Najpopularniejsi Piłkarze</h2>
    </center>
	<ul> 
        <li>Cristiano Ronaldo</li>
            Portugalski piłkarz występujący na pozycji skrzydłowego lub napastnika we włoskim klubie Juventus F.C. oraz w reprezentacji Portugalii, której jest kapitanem.
            <a href="https://pl.wikipedia.org/wiki/Cristiano_Ronaldo">Więcej</a>
            <hr/>
            <li>Leo Meszi</li>
            Argentyński piłkarz występujący na pozycji pomocnika lub napastnika w hiszpańskim klubie FC Barcelona, której jest kapitanem oraz w reprezentacji Argentyny, której także jest kapitanem. Srebrny medalista Mistrzostw Świata 2014, uczestnik Mistrzostw Świata 2018. Złoty medalista Igrzysk Olimpijskich 2008. Najskuteczniejszy zawodnik w historii FC Barcelony. Uważany jest za jednego z najlepszych piłkarzy w historii piłki nożnej

            <a href="https://pl.wikipedia.org/wiki/Lionel_Messi">Więcej</a>
            <hr/>
            <li>Mohamed Salah</li>
            Egipski piłkarz występujący na pozycji pomocnika lub napastnika w angielskim klubie Liverpool oraz w reprezentacji Egiptu. Wychowanek El Mokawloon. W swojej karierze grał także w takich zespołach, jak FC Basel, Chelsea, ACF Fiorentina czy AS Roma.
            <a href="https://pl.wikipedia.org/wiki/Mohamed_Salah">Czytaj dalej</a>
          </ul>
         
          
          
          <div id ="abc">
		
			
					<?php
					include("scripts/lab3.php");
          
          ?>
				
			</div>
</main>			
		
        </body>

</html>