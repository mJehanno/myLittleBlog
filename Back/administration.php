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
			<label><u>Nombre de Billets de blog :</u></label>
			<?php $nbBillet = getNumberBillet($collectionBillet); echo $nbBillet; ?>
			<label><u>Nombre de commentaire :</u></label>
		</div>
		<div id="lastBlog">
			<label><u>Dernier Blog :</u></label><br>
			<?php $lastBillet = getLastBillet($collectionBillet);
					foreach($lastBillet as $result){
						$titre=$result['titre'];
						$categorie = $result['categorie'];
						$date = $result['date'];
						$message = $result['message'];
					}
				echo "Titre :".$titre."<br>";
				echo "Catégorie : ".$categorie."<br>";
				echo "Date : ".$date."<br>";
				echo "Message :".$message."</br>";
			?>
		</div>
	</div>
</body>
