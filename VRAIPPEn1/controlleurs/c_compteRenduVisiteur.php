<?php

	$action = $_REQUEST['action'];
	switch($action)
	{
		case 'voirCR':
		{
			$lesClients = $pdo->getLesComptesRendus();
			include("vues/v_compteRenduVisiteur.php");
		}
		case 'saisieCR':
		{
			include("vues/v_saisieCRVisiteur.php");
		}
		case 'modifierCR':
		{
			include("vues/v_modifCRVisiteur.php");
		}
	}

?>