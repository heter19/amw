<?php
include 'connect.php';
 
if(isset($_POST['dodawanie'])) {
	$tresc = addslashes(mysql_escape_string($_POST['tresc']));
	mysql_set_charset("utf8");
	mysql_query("INSERT INTO `newsy` (`tresc`) VALUES ('$tresc');");
}
?>