<?php
session_start();
?>

<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Panel Admin</title>
	<link href="media/administration.css" rel="stylesheet">
</head>

<body>
	<?php
		include_once('menu.php');
		include_once('../connexion.php');
		include_once('fonction.php');
	?>

	<div id="page">
		<div id="stat">
			<label>Nombre de Billets de blog :</label>
			<?php $nbBillet = getNumberBillet($collectionBillet); echo $nbBillet; ?>
			<label>Nombre de commentaire :</label>
		</div>
		<div id="lastBlog">
			<label>Dernier Blog :</label>
			<?php ?>
		</div>
	</div>
</body>
