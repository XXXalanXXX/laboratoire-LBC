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
		{include("controleurs/c_voirResponsable.php");break;}
	case 'CompteRendu' :
		{include("controleurs/c_CompteRenduR.php");break;}
	case 'Somme' :
		{include("controleurs/c_voirSomme.php");break;}
	case 'voirActivite' :
		{include("controleurs/c_ActiviteR.php");break;}
	case 'inscrireResponsable':
		{include("controleurs/c_inscrireR.php");break;}


}
?>
