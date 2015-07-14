<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>MyBlog</title>
		<link href="main.css" rel="stylesheet">
	</head>

	<body>
		<header>

		</header>
<?php require_once('menu.php'); ?>
		<h1>Mes Envies, Mes Humeurs, Mes Emmerdes</h1>
		<h3>Tout ça réunit en un seul endroit ! </h3>


		<div class="container">
			<?php
				include_once('../connexion.php');
				include_once('../Back/fonction.php');
				$cursor = getAllBillet($collectionBillet);
				foreach($cursor as $result){
			?>
			<a href="page.php?blog=<?php echo $result['titre']; ?>"><div class="content" id="<?php echo $result['_id']; ?>">
			<label>Titre : <?php echo $result['titre']; ?></label>
			<hr>
			<label>Catégorie : <?php echo $result['categorie']; ?></label>
			<label>Billet : <?php echo $result['message']; ?></label>
			<em>Publié le : <?php echo $result['date']; ?></em>
			</div></a>
			<?php
				}
			?>
		</div>

		<footer>

		</footer>
	</body>
</html>
