<?php

	function getAllBilletByCategorie($categorie,$collection){
		$cursor = $collection -> find(array('categorie' => $categorie));
		return $cursor;
	}

	function getBilletByTitle($titre,$collection){
		$cursor = $collection -> find(array('titre' => $titre));
		return $cursor;
	}

?>
