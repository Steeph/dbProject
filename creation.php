<?php
include "init.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>Gestion Base de donnée</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
</head>

<h1> Assistant de création</h1>

<a class="btn btn-info" href="accueil.php"> Retour </a>



  <h2> Insérer le nom de la table <h2>
    <form method="post" action="creation.php" class="form-horizontal">
      <div class="form-group">
        <div class="col-sm-4">
          <input type="text" name="name" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-4">
          <input type="submit" class="btn btn-success" value="Créer la table">
        </div>
      </div>
    </form>
    <?php

  if (isset($_POST['name'])) {
    $name = $bdd->quote($_POST['name']);

// Création d"une table avec le template par défaut : Création -> Id, Entreprise, Nom, Prenom, Fonction, Mail, Mobile, Fixe, Entite

    echo $name;

    try {
      $bdd->query("CREATE TABLE ${name} (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        entreprise VARCHAR(255),
        nom VARCHAR(255),
        prenom VARCHAR(255),
        fonction VARCHAR(255),
        mail VARCHAR(255),
        mobile VARCHAR(20),
        fixe VARCHAR(20),
        entite VARCHAR(255)
      )");
      echo "hello";
    }

    catch(Exception $e) {
    	die('Erreur :'. $e->getMessage());
      echo "bad!!";
    }


}
?>

    <script type="text/javascript" src="js/script.js"></script>
  </body>
  </html>
