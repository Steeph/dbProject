<?php
session_start();

// Connexion DB

try {

$bdd = new PDO('mysql:host=localhost;dbname=Observatoire;charset=utf8', '', '');
}

catch(Exception $e) {
	die('Erreur :'. $e->getMessage());
}


 ?>
