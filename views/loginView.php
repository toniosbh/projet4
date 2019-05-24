<?php 
session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bienvenue tu es connecté</title>
	<?php require_once("header.php");?>
</head>
<body>
		<!-- protection faille XSS avec "htmlspecialchars" -->
		<p>Vous êtes mainenant connecté</p>
	<p>Bonjour <?php echo $_SESSION['username']; ?></p>
	<p>Ton mot de passe est <?php echo $_SESSION['password']; ?></p>

</body>
</html>
<?php 
?>