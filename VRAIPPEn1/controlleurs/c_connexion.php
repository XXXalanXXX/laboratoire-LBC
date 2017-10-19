<?php 

$action = $_REQUEST['action'];
switch($action)
{
	
	case 'connexion_b':
	{
		  		//on récupère les variables du
		$login = $_POST['login'];
		$mdp = $_POST['mdp'];
		$pdo->connexion($login,$mdp);
		

	}

}
?>
