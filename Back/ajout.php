<?php 
    session_start();
?>

<!doctype html>
<head>
    <title>Panel Admin</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="media/ajout.css">
</head>
<body>
    <?php 
        include_once('menu.php');
        include_once("../connexion.php");
        include_once('fonction.php');
    ?>
    
    <form action="traitement.php?action=ajout" method="POST" enctype="multipart/form-data">
        <fieldset>
        <legend>Ajout de Blog</legend>
            <div id="form">
                <label>Titre :</label>
                    <input type="text" name="title" placeholder="Un titre bien accrocheur ?" required >
                <label>Catégorie :</label>
                    <select name="categorie" required >
                    <?php 
                            getAllCategorie($dbUser,$collectionCategorie);

                    ?>
                    </select>
                <label>Message :</label>
                    <textarea name="message" required ></textarea>
                <label>Image :</label>
                    <input type="file" name="image">
                <div id="submit">
                    <input type="submit" value="Ajouter" name="add">
                </div>
            </div>
        </fieldset>
    </form>
</body>