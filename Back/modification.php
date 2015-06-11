<?php
	session_start();
	include_once("fonction.php");
	include_once("../connexion.php");
?>

<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Panel Admin</title>
	<link href="media/modification.css" rel="stylesheet">
</head>
<body>
	<?php
		include_once("menu.php");
	?>
	<table border="1" id="modifDisplay">
		<thead>
			<th>Titre</th>
			<th>Catégorie</th>
			<th>Message</th>
			<th>Date</th>
			<th>Modification</th>
			<th>Suppression</th>
		</thead>
		<tbody>
			<form action="traitement.php?action=modification" method="post">
			<?php
				$cursor=getAllBillet($collectionBillet);
				foreach($cursor as $result){
					echo '<tr><td>'.$result['titre'].'</td>';
					echo '<td>'.$result['categorie'].'</td>';
					echo '<td>'.$result['message'].'</td>';
					echo '<td>'.$result['date'].'</td>';
					echo "<td><a href='traitement.php?action=modification&titre=".$result['titre']."'><img src='./media/images/edit/edit.png' class='icone' ></a></td>";
					echo "<td><a href='traitement.php?action=suppression&titre=".$result['titre']."'><img src='./media/images/edit/delete.png' class='icone' ></a></td>";
					echo '</tr>';
				}
			?>
			</form>
		</tbody>
	</table>
</body>
