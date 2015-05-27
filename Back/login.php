<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Panel Admin</title>
        <link href="media/login.css" rel="stylesheet">
    </head>
    <body>
        <form action="traitement.php" method="post">
            <fieldset>
                <legend>Connexion</legend>
                <div id="input">
                    <label>Login :</label>
                    <input type="text" name="login" required>
                    <label>Mot de Passe :</label>
                    <input type="password" name="passwd" required>
                    <div id="submit">
                        <input type="submit" value="Se connecter" name="connexion">
                    </div>
                </div>
            </fieldset>
        </form>
    </body>
</html>        

