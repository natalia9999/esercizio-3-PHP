<!DOCTYPE html>
<html>
<head>
<title>Chiariello</title>
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>
<body>
<div class="jumbotron text-center">
<h1 style="color:Blue">Lettura dati in PHP</h1>

<div class="pure-menu pure-menu-horizontal">
    <ul class="pure-menu-list">
        <li class="pure-menu-item"><a href="http://www.divini5g.com/chiariello" class="pure-menu-link">Home</a></li>
        <li class="pure-menu-item pure-menu-disabled"><a href="http://www.divini5g.com/chiariello/leggi.php" class="pure-menu-link">Lettura Dati</a></li>
        <li class="pure-menu-item"><a href="http://www.divini5g.com/chiariello/scrittura.php" class="pure-menu-link">Inserisci Dati</a></li>
    </ul>
</div>

<table class="table table-condensed">
  <tr>
    <th>Cognome</th>
    <th>Nome</th>
    <th>Email</th>
	<th></th>
	<th></th>
  </tr>

<?php
$host = "sql.divini5g.com";
$user = "divini5g07622";
$pass = "gucci";
$nome = "divini5g07622";
$tab_nome = "chiariello";

mysql_connect($host,$user,$pass) or die("Non è collegarsi al server");
@mysql_select_db("$nome") or die("Non è possibile connettersi al database $nome");

$sqlquery = "SELECT * FROM $tab_nome";
$result = mysql_query($sqlquery);
$number = mysql_num_rows($result);
while ($row= mysql_fetch_array($result))
{
	$cod = $row['cod'];
	echo "<tr>";
	echo "<td>";
	echo $row['cognome'];
	echo "</td>";
	echo "<td>";
	echo $row['nome'];
	echo "</td>";
	echo "<td>";
	echo $row['mail'] ;
	echo "</td>";
	echo "<td>";
	echo "<a href='/chiariello/modifica.php?ute=$cod' class='btn btn-info' role='button'>Modifica</a> ";
	echo "</td>" ;
	echo "<td>";
	echo "<a href='/chiariello/delete.php?ute=$cod' class='btn btn-danger' role='button'>Elimina</a> ";
	echo "</td>" ;
	echo "</tr>";
}
mysql_close();
?>
</table>
</div>
<footer class="container-fluid text-center">
  <p>ITIS E. DIVINI INFORMATICA 5G</p>
  <p>Natalia Chiariello</p>
</footer>
</body>
</html>