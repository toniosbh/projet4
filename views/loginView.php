<?php 
session_start();
require_once ('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bienvenue tu es connecté</title>
</head>
<body>
		<!-- protection faille XSS avec "htmlspecialchars" -->
		<p>Vous êtes mainenant connecté</p>
	<p>Bonjour <?php echo htmlspecialchars ($_SESSION['username']); ?></p>
	<p>Ton mot de passe est <?php echo htmlspecialchars ($_SESSION['password']); ?></p>

</body>
</html>