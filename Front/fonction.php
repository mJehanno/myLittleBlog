<?php

	function getAllBilletByCategorie($categorie,$collection){
		$cursor = $collection -> find(array('categorie' => $categorie));
		return $cursor;
	}

	function getBilletById($id,$collection){
		$cursor = $collection -> find(array('id'=>$id));
		return $cursor;
	}

?>
