<!DOCTYPE html>
<head>
<title>Modifica Dati</title>
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="jumbotron text-center">
<h1 style="color:Blue">Natalia Chiariello</h1>
<h2 style="color:Red">Esercitazione Modifica PHP</h2>

<div class="pure-menu pure-menu-horizontal">
    <ul class="pure-menu-list">
        <li class="pure-menu-item"><a href="http://www.divini5g.com/chiariello" class="pure-menu-link">Home</a></li>
        <li class="pure-menu-item"><a href="http://www.divini5g.com/chiariello/leggi.php" class="pure-menu-link">Leggi Dati</a></li>
    </ul>
</div>
<br> 
			
			<?php
$host = "sql.divini5g.com"; // Host name 
$username = "divini5g07622"; // Mysql username 
$password = "gucci"; // Mysql password 
$db_name = "divini5g07622"; // Database name
$tab_nome = "chiariello"; 

//Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect to server :  " .mysql_error());
mysql_select_db("$db_name")or die("cannot select DB"  .mysql_error());
$utente=$_GET['ute'];
 
$sql = "SELECT * FROM $tab_nome WHERE cod=$utente";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result)) {
$nome = $row['nome'];
$cognome = $row['cognome'];
$mail = $row['mail'];
}
			 ?>
			   
			  
<form action="elimina.php" method="post">
  <div class="form-group">
    <label for="cognome">Cognome:</label>
    <input type="text" name="cognome" class="form-control" id="cognome" aria-describedby="mailHelp" placeholder="Inserisci Cognome" value="<?php echo $cognome;?>">
  </div>
  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" class="form-control" id="nome" placeholder="Inserisci Nome" value="<?php echo $nome;?>">
  </div>
  <div class="form-group">
    <label for="mail">Email:</label>
    <input type="mail" name="mail" class="form-control" id="mail" placeholder="Inserisci Email" value="<?php echo $mail;?>">
  </div>
  <div class="form-group">
    <label for="mail"></label>
    <input type="hidden" name="ute" class="form-control" id="ute" value="<?php echo $utente;?>">
  </div>
	<input type="submit" name="Invio" value="Elimina" class="btn btn-success" role="button"/> 
	<input type="reset" name="Cancella" value="Annulla" class="btn btn-info" role="button"/>
</form>
</div>
<footer class="container-fluid text-center">
  <p>ITIS E. DIVINI INFORMATICA 5G</p>
  <p>Natalia Chiariello</p>
</footer>
</body>
</html>
