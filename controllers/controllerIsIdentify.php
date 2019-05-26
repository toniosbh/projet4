<?php 
	require_once('models/checkIfIdentify.php');
class Controller {
	// public $checkIfIdentify;

	public function __construct()
	{
	$this->models = new Model();
	}
		public function invoke()
	{
		$reslt = $this->models->isIdentify();
		// it will call the getlogin() function of models classs and will store the return value
		if($checkIfIdentify == 'login')
		{
			include 'views/loginView.php';
		}
		else{
			include 'views/login.php';
		}
	}
}
?>