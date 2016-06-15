<?php
include "init.php";
$_SESSION['dbName'] = "";
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
<body>
	<div id="container">
	<h1> Base de donnée de l'Observatoire des réseaux Sociaux </h1>
	<br>
	<h2> Choissisez votre table </h2>

<?php
// Liste des tables de la DB

$query = $bdd->prepare('SHOW TABLES FROM Observatoire');
$query->execute();

while($rows = $query->fetch(PDO::FETCH_ASSOC)) {
	?>
 	<p>
		 <form method="post" action="interface.php">
			<input type="hidden" name="tableName" value="<?php echo $rows['Tables_in_Observatoire'];?>">
			<input type="submit"  class="btn btn-info" value="<?php echo $rows['Tables_in_Observatoire'];?>">
		</form>
	</p>

<?php
}
?>
<!-- Bouton de création d e table -->

<p><a class="btn btn-success" href="creation.php">Créer une table</a></p>


</div>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
