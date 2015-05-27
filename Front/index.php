<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MyBlog</title>
        <link href="main.css" rel="stylesheet">
        <script src=""></script>
    </head>
    
    <body>
        <header>
        
        </header>
        <menu>
            <a href="">Dev</a>
            <a href="">Divers</a>
            <a href="">Envie</a>
            <a href="">Emmerde</a>
            <a href="">Humour</a>
        </menu>
        <h1>Mes Envies, Mes Humeurs, Mes Emmerdes</h1>
        <h3>Tout ça réunit en un seul endroit ! </h3>        
        
        <div class="container">
            <?php 
                include_once('../connexion.php');
                include_once('../Back/fonction.php');
                $cursor = getAllBillet($collectionBillet);
                foreach($cursor as $result){
            ?>
            <div class="content" id="<?php echo $result['_id']; ?>">
            <label>Titre : <?php echo $result['titre']; ?></label>
            <hr>
            <label>Catégorie : <?php echo $result['categorie']; ?></label>
            <label>Billet : <?php echo $result['message']; ?></label>
            <em>Publié le : <?php echo $result['date']; ?></em>
            </div>
            <?php
                }
            ?>
        </div>
        
        
        <footer>
        
        </footer>
    </body>
</html>