<?php

	function getAllBilletByCategorie($categorie,$collection){
		$cursor = $collection -> find(array('categorie' => $categorie));
		return $cursor;
	}

?>
