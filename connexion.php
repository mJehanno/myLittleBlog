<?php

$connexionUser = new MongoClient();
//echo "Connection to database successfully<br>";
$dbUser = $connexionUser->Blog;
//echo "Database $dbUser selected<br>";
$collectionUser = $dbUser->user;
//echo "Collection $collectionUser selected succsessfully<br>";
$collectionBillet = $dbUser->billet;
//echo "Collection $collectionBillet selected succsessfully<br>";
$collectionCategorie = $dbUser->categorie;
//echo "Collection $collectionCategorie selected succsessfully<br>";

?>