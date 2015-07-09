<?php
	require_once('../connexion.php');
	//require_once('menu.php');
	require_once('./fonction.php');
	$id = $_GET['blog'];

	$blog = getBilletById($id,$collectionBillet);
	var_dump($blog);

?>
