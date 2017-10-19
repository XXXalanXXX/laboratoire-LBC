<?php
session_start();
require_once("modeles/class.pdoLBC.inc.php");
require_once("utils/fonctions.inc.php");
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
		{include("controlleurs/c_visiteurs.php"); break;}
	case 'visiteursRegion' :
		{include("controlleurs/c_visiteursRegion.php"); break;}
	case 'compteRenduVisiteur' : 
		{include("controlleurs/c_compteRenduVisiteur.php"); break;}
	case 'activite' : 
		{include("controlleurs/c_activites.php"); break;}
}

include("vues/v_pied.php");
?>

