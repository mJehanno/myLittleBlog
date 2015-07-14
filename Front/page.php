<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<title>MyBlog</title>
	<link href="page.css" rel="stylesheet">
</html>
<body>
<?php

//créer une page pour afficher un billet en grand
	require_once('../connexion.php');
	require_once('menu.php');
	require_once('./fonction.php');
	$id = $_GET['blog'];

	$blog = getBilletByTitle($id,$collectionBillet);

foreach($blog as $billet){
		$titre = $billet['titre'];
		$date = $billet['date'];
		$message = $billet['message'];
	}
?>
	<div class="content">
		<h1><?php echo $titre; ?></h1>
		<div class="contenu">
			<article><?php echo $message; ?></article>
		</div>
		<em><?php echo "publié le : ".$date; ?></em>
		<div id="form">
			<form>
				<label class="labelComm">Pseudo :</label>
				<input type="text">
				<label class="labelComm">Em@il :</label>
				<input type="email">
				<label class="labelComm">Commentaire :</label>
				<textarea rows="10" cols="40"></textarea>
				<input type="submit" value="Commenter">
			</form>
		</div>
	</div>
</body>
