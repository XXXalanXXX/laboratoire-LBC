<!--Simon-->
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
		{include("controleurs/v_accueilResponsable.php");break;}
	case 'CompteRendu' :
		{include("controleurs/c_CompteRenduResponsable.php");break;}
	case 'Somme' :
		{include("controleurs/c_voirSomme.php");break;}
	case 'voirActivite' :
		{include("controleurs/c_activites.php");break;}

}
?>
