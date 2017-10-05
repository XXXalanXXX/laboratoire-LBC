<?php
session_start();
require_once("util/fonctions.inc.php");
require_once("util/class.pdoJardiPlants.inc.php");
include("vues/v_entete.php") ;
include("vues/v_bandeau.php") ;

if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];

$pdo = PdoJardiPlants::getPdoJardiPlants();	 
switch($uc)
{
	case 'accueil':
		{include("vues/v_accueil.php");break;}
	case 'voirProduits' :
		{include("controleurs/c_voirProduits.php");break;}
	case 'gererPanier' :
		{ include("controleurs/c_gestionPanier.php");break; }
	case 'supprimerUnProduit' :
		{ include("controleurs/c_supprimerProduit.php");break; }
}
include("vues/v_pied.php") ;
?>

