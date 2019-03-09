<?php
include 'connect.php';
 
$zapytanie = mysql_query("SELECT * FROM `Imie` ORDER BY `id` DESC");
while($zapytanie && $rekord = mysql_fetch_assoc($zapytanie)) {
	$id = $rekord['id'];
	$imie = stripslashes(htmlspecialchars($rekord['imie']));
	echo'
		Imie #'.$id.' <a href="edytuj.php?id='.$id.'" class="edytuj" id="edytuj_'.$id.'">Edytuj</a> <a href="usun.php?id='.$id.'" class="usun" id="usun_'.$id.'">Usuń</a> <span id="wynik_'.$id.'"><br /><i>'.$imie.'</i><hr />
	';
	}
?>