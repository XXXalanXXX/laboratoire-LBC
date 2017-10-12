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
		{include("controleurs/c_CompteRenduR.php");break;}
	case 'voirSomme' :
		{include("controleurs/c_voirSomme.php");break;}
	case 'voirActivites' :
		{include("controleurs/c_ActiviteR.php");break;}
}
?>
