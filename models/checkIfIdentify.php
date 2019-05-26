<?php 
require_once('controllers/controllerIsIdentify.php');
class Model {

	public function isIdentify() 
	{
		// here goes some hardcoded values to simulate the database
		if (isset($_POST['username']) && isset($_POST['password'])){
			{
					// Alors on démarre la session
					session_start(); 
					$_SESSION['username'] = $_POST['username'];
					$_SESSION['password'] = $_POST['password'];
					// puis redirection vers la page logged.php
					header ('location: loginView.php');
			}
			else {
		// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo 'Membre non reconnu...';
		// puis on le redirige vers la page d'accueil
			}
		}
	}
}
?>