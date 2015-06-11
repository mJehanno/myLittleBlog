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
		require_once("../connexion.php");
		require_once('fonction.php');
	?>

	<form action="traitement.php?action=post_modification" method="POST" enctype="multipart/form-data">
		<fieldset>
		<legend>Modification de Blog</legend>
			<div id="form">
				<?php $billet = getBilletByTitre($_GET['titre'],$collectionBillet); foreach($billet as $result){ ?>
				<label>Titre :</label>
					<input type="text" name="title" placeholder="Un titre bien accrocheur ?" value="<?php echo $result['titre']; ?>" required >
				<label>Catégorie :</label>
					<select name="categorie" required >
						<option selected value="<?php echo $result['categorie']; ?>"><?php echo $result['categorie']; ?></option>
					<?php
							getAllCategorie($dbUser,$collectionCategorie);

					?>
					</select>
				<label>Message :</label>
					<textarea name="message" required id="message"><?php echo $result['message']; ?></textarea>
					<script>
						var message = document.getElementById('message');
						CKEDITOR.replace(message);
					</script>
				<?php } ?>
				<input type="hidden" value="<?php echo $result['titre']; ?>" name="oldTitre">
				<input type="hidden" value="<?php echo $result['categorie']; ?>" name="oldCategorie">
				<input type="hidden" value="<?php echo $result['date']; ?>" name="oldDate">
				<input type="hidden" value="<?php echo $result['message']; ?>" name="oldMessage">
				<div id="submit">
					<input type="submit" value="Modifier" name="update">
				</div>
			</div>
		</fieldset>
	</form>
</body>
