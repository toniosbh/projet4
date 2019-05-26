<?php 
session_start();
$_SESSION['username'] = $_POST['username'];
require_once ('views/header.php');  
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Blog de Jean Derochefort - Ecrivain</title>
        <meta charset="utf-8" />
    </head>

    <body>
        <h2>BIENVENUE SUR LE BLOG DE JEAN FORTEROCHE</h2>
        <h3>ROMAN EN COURS DE RÉDACTION...</h3>
        <p>"Billet simple pour l'Alaska"</p>
        <p> Bonjour <?php echo $_SESSION['username']; ?></p>
        
    </body>
</html>