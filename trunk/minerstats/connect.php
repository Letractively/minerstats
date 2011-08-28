<?php 
// Connexion à la base MySQL
mysql_connect($host, $login, $pass) or die ('ERREUR '.mysql_error());

// sélection de la base de données
mysql_select_db($dbname) or die ('ERREUR '.mysql_error());
?>