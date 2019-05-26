<?php  
?>
<!DOCTYPE html>	
<html lang="fr">
	<head>
		<title>Blog d'un écrivain</title>
		<meta charset="utf-8">
		<meta name="description" content="Blog d'un écrivain">
		<!-- Pour les petites résolutions  -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" media="screen and (max-width: 1280px)" href=""/>
        <!-- Favicon -->
		<link rel="shortcut icon" href="">
		<link rel="stylesheet" href="public/style.css" />
	</head>
	<body>
		<header>
		<!-- ************** LOGO ET MENU ************** -->
            <div class="container">
		            <nav>
		                <ul>
		                    <li><a href="../index.php">Accueil</a></li>
		                    <li><a href="#">Tous les chapitres</a></li>
		                   <?php 
		                   		if (isset($_SESSION) && (isset($_SESSION['logged_in'])) && $_SESSION['logged_in'] == ($_SESSION['username'])){ ?>
		                   			<li><a href="views/disconnect.php">Déconnexion</a></li> <?php  } else { ?>
		                   			<li><a href="views/login.php">Connexion</a></li> 
		                   		<?php } ?>	
		                </ul>
		            </nav>
         </header> 
	</body>
</html>