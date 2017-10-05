<?php
session_start();
require_once("modele/class.pdoLBC.inc.php");
require_once("util/fonctions.inc.php");
include("vues/v_entete.php");
include("vues/v_bandeau.php");

if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];

$pdo = PdoLBC::getPdoLBC();	 
switch($uc)
{
	case 'accueil':
		{include("controleurs/c_connexion.php"); break;}
	case 'accueilVisiteur' :
		{include("controleurs/c_visiteur.php"); break;}
	case 'accueilResponsable' : 
		{include("controleurs/c_responsable.php"); break;}
}

include("vues/v_pied.php");
?>

