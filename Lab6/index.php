<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"pl-PL\">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"> 
    <title>Rezultat zapytania</title>
	

</head>

<body>

<table width="900" align="center" border="1" bordercolor="#d5d5d5" cellpadding="0" cellspacing="0">     
<tr>
<?php 
ini_set("display_errors", 0);
require_once 'dbconnect.php';
$polaczenie = mysqli_connect($host, $user, $password);
mysqli_query($polaczenie, "SET CHARSET utf8");
mysqli_query($polaczenie, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
mysqli_select_db($polaczenie, $database);

$zapytanietxt = file_get_contents("zapytanie.txt");

$rezultat = mysqli_query($polaczenie, $zapytanietxt);
$ile = mysqli_num_rows($rezultat);

if ($ile>=1) 
{
echo<<<END
<td width="50" align="center" bgcolor="e5e5e5">id</td>
<td width="100" align="center" bgcolor="e5e5e5">Kraj</td>
<td width="100" align="center" bgcolor="e5e5e5">Imie</td>
<td width="100" align="center" bgcolor="e5e5e5">Nazwisko</td>
<td width="100" align="center" bgcolor="e5e5e5">Pozycja</td>

</tr><tr>
END;
}
	for ($i = 1; $i <= $ile; $i++) 
	{
		
		$row = mysqli_fetch_assoc($rezultat);
		$id = $row['id'];
		$kraj = $row['Kraj'];
		$imie = $row['Imie'];
		$nazwisko = $row['Nazwisko'];
		$pozycja = $row['Pozycja'];
		
		
echo<<<END
<td width="50" align="center">$id</td>
<td width="100" align="center">$kraj</td>
<td width="100" align="center">$imie</td>
<td width="100" align="center">$nazwisko</td>
<td width="100" align="center">$pozycja</td>

</tr><tr>
END;
			
	}
	

?>


</tr></table>



</body>
</html>
