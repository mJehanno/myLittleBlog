<?php

/* --- Billet de Blog --- */

/* -- Create -- */
function setBillet($billet,$collection){
	$collection->insert($billet);
}

/* -- Research -- */
function getAllBillet($collection){
	$cursor=$collection->find();
	return $cursor;
}

function getLastBillet($collection){
	$cursor = $collection->find()->sort(array("date"=>-1))->limit(1);
	return $cursor;
}

/* -- Update -- */
function updateBillet(){

}

/* -- Delete -- */
function deleteBillet(){

}


/* --- Categorie --- */

/* -- Research -- */
function getAllCategorie($db,$collection){
	$cursor= $collection->find();
	foreach($cursor as $result){
		echo "<option value=".$result['category'].">".$result['category']."</option>";
		$i++;
	}
}



/* --- User --- */

/* -- Research -- */
function getAdmin($collection){
	$collection -> find();
}


/* --- Statistique --- */

/* -- Research -- */
function getNumberBillet($collection){
	$cursor =$collection -> count();
	return $cursor;
}

?>
