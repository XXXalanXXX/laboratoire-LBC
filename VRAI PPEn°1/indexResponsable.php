<?php
require_once("modele/class.pdoLBc.inc.php");

if(!isset($_REQUEST['uc']))
     $uc = 'accueilResponsable';
else
	$uc = $_REQUEST['uc'];

$pdo = PdoLBc::getPdoLBc();	 
switch($uc)
{
	case 'accueilResponsable':
		{include("controleurs/c_voirResponsable.php");break;}
	case 'compteRendu' :
		{include("controleurs/c_voirCompteRenduR.php");break;}
	case 'Activite' :
		{include("controleurs/c_voirActiviteR.php");break;}
	case 'VoirSomme' :
		{include("controleurs/c_voirVisualiserSomme.php");break;}
}
?>
