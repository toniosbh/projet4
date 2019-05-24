
<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8" />
<?php require_once("header.php");?>
    </head>

    <body>
        <h2>ZONE DE CONNECTION</h2>

        <form action="loginView.php" method="POST">
        <p><label>Identifiant <input type="text" name="username"></label></p>
        <p><label>Mot de passe <input type="text" name="password"></label></p>
        <button type="submit"><span>Me Connecter</span></button>
        <button type="reset"><span>Annuler</span></button>
        </form>
        
    </body>
</html>