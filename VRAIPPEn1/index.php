<?php
session_start();
require_once("modeles/class.pdoLBC.inc.php");
require_once("utils/fonctions.inc.php");
include("vues/v_entete.php");
include("vues/v_bandeau.php");
include("vues/v_connexion.php");

if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];

$pdo = PdoLBC::getPdoLBC();	 
switch($uc)
{
	case 'accueil':
		{include("controlleurs/c_visiteurs.php"); break;}
	case 'accueilVisiteur' :
		{include("controlleurs/c_visiteur.php"); break;}
	case 'accueilResponsable' : 
		{include("controlleurs/c_responsable.php"); break;}
	case 'connexion':
		{include("controlleurs/c_connexion.php"); break;}
}

include("vues/v_pied.php");
?>

