
<?php 
session_start();
$_SESSION['logged-in'] = 'logged_in';
require_once ('header.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="public/style.css" />
</head>

<body>
    <div class="formContainer"> 
        <form>
            <h2>ZONE DE CONNECTION</h2>
            <form action="loginView.php" method="POST">
            <p><label>Identifiant <input type="text" name="username"></label></p>
            <p><label>Mot de passe <input type="password" name="password"></label></p>
            <button type="submit"><span>Me Connecter</span></button>
            <button type="reset"><span>Annuler</span></button>
        </form>
</body>
</html>