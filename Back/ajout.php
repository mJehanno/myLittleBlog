<?php
	session_start();
?>

<!doctype html>
<head>
	<title>Panel Admin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="media/ajout.css">
	<script src="ckeditor/ckeditor.js"></script>
</head>
<body>
	<?php
		include_once('menu.php');
		include_once("../connexion.php");
		include_once('fonction.php');
	?>

	<form action="traitement.php?action=ajout" method="POST" enctype="multipart/form-data">
		<fieldset>
		<legend>Ajout de Blog</legend>
			<div id="form">
				<label>Titre :</label>
					<input type="text" name="title" placeholder="Un titre bien accrocheur ?" required >
				<label>Catégorie :</label>
					<select name="categorie" required >
					<?php
							getAllCategorie($dbUser,$collectionCategorie);

					?>
					</select>
				<label>Message :</label>
					<textarea name="message" required id="message" ></textarea>
					<script>
						var message = document.getElementById('message');
						CKEDITOR.replace(message);
					</script>
				<div id="submit">
					<input type="submit" value="Ajouter" name="add">
				</div>
			</div>
		</fieldset>
	</form>
</body>
