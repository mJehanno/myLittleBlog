<?php 
session_start();
?>

<!doctype html>
<head>
    <meta charset="utf-8">
    <title>Panel Admin</title>
    <link href="media/administration.css" rel="stylesheet">
</head>

<body>
    <?php 
        include_once('menu.php');
    ?>
        
    <div id="page">
        <div id="stat">
            <label>Nombre de Billets de blog :</label>
            <?php ?>
            <label>Nombre de commentaire :</label>
        </div>
        <div id="lastBlog">
            <label>Dernier Blog :</label>
            <?php ?>
        </div>
    </div>
</body>