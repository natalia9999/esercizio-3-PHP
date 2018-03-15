<!DOCTYPE html>
<html>
<title>Chiariello</title>
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="jumbotron text-center">
	<div class="pure-menu pure-menu-horizontal">
		<ul class="pure-menu-list">
			<li class="pure-menu-item"><a href="http://www.divini5g.com/chiariello" class="pure-menu-link">Home</a></li>
			<li class="pure-menu-item"><a href="http://www.divini5g.com/chiariello/leggi.php" class="pure-menu-link">Leggi Dati</a></li>
			<li class="pure-menu-item"><a href="http://www.divini5g.com/chiariello/scrittura.php" class="pure-menu-link">Inserisci Dati</a></li>
		</ul>
	</div>
	<br>

<body>
<?php
$host = "sql.divini5g.com";
$user = "divini5g07622";
$pass = "gucci";
$nome = "divini5g07622";
$tab_nome = "chiariello";

mysql_connect($host,$user,$pass) or die("Impossibile collegarsi al server");
@mysql_select_db("$nome") or die("Impossibile connettersi al database $nome");

$cognome= $_POST["cognome"];
$nome= $_POST["nome"];
$mail= $_POST["mail"];

$sql= "INSERT INTO $tab_nome (cognome, nome, mail)";
$sql .="VALUES ('$cognome', '$nome', '$mail')";

if (mysql_query($sql)) {
	echo "I dati inseriti sono stati salvati correttamente";
	echo "Database aggiornato aggiornato";
}
else{
	echo "Database non aggiornato /n"; 
	echo "Errore nell'inserimento dati: " . mysql_error();
}
?>
</body>
</html>