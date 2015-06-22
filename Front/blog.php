<?php
	require_once('../connexion.php');
	require_once('fonction.php');
	echo "<div class='container_ajax'>";
	switch ($_GET['display']){
		case 'dev' :
			$cursor = getAllBilletByCategorie('Dev',$collectionBillet);
			foreach($cursor as $result){
				echo "<div class='content_ajax container' id='".$result['_id']."'>
			<label>Titre : ".$result['titre']."</label>
			<hr>
			<label>Catégorie : ".$result['categorie']."</label>
			<label>Billet : ".$result['message']."</label>
			<em>Publié le : ".$result['date']."</em>
			</div>";
			}
		break;
		case 'divers' :
			$cursor = getAllBilletByCategorie('Divers',$collectionBillet);
			foreach($cursor as $result){
				echo "<div class='content_ajax container' id='".$result['_id']."'>
			<label>Titre : ".$result['titre']."</label>
			<hr>
			<label>Catégorie : ".$result['categorie']."</label>
			<label>Billet : ".$result['message']."</label>
			<em>Publié le : ".$result['date']."</em>
			</div>";
			}
			break;
		case 'envie' :
			$cursor = getAllBilletByCategorie('Envie',$collectionBillet);
			foreach($cursor as $result){
				echo "<div class='content_ajax container' id='".$result['_id']."'>
			<label>Titre : ".$result['titre']."</label>
			<hr>
			<label>Catégorie : ".$result['categorie']."</label>
			<label>Billet : ".$result['message']."</label>
			<em>Publié le : ".$result['date']."</em>
			</div>";
			}
			break;
		case 'emmerde' :
			$cursor = getAllBilletByCategorie('Emmerde',$collectionBillet);
			foreach($cursor as $result){
				echo "<div class='content_ajax container' id='".$result['_id']."'>
			<label>Titre : ".$result['titre']."</label>
			<hr>
			<label>Catégorie : ".$result['categorie']."</label>
			<label>Billet : ".$result['message']."</label>
			<em>Publié le : ".$result['date']."</em>
			</div>";
			}
			break;
		case 'humour' :
			$cursor = getAllBilletByCategorie('Humour',$collectionBillet);
			foreach($cursor as $result){
				echo "<div class='content_ajax container' id='".$result['_id']."'>
			<label>Titre : ".$result['titre']."</label>
			<hr>
			<label>Catégorie : ".$result['categorie']."</label>
			<label>Billet : ".$result['message']."</label>
			<em>Publié le : ".$result['date']."</em>
			</div>";
			}
			break;
	}
echo "</div>";

?>
