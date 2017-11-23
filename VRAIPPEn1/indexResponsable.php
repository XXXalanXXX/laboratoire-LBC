<!--Simon-->
<?php
require_once("modeles/class.pdoLBc.inc.php");
include("vues/v_entete.php");
include("vues/v_bandeau_index.php");

if(!isset($_REQUEST['uc']))
     $uc = 'accueilResponsable';
else
	$uc = $_REQUEST['uc'];

$pdo = PdoLBc::getPdoLBc();	 
switch($uc)
{
	case 'accueilResponsable':
		{include("vues/v_accueilResponsable.php");break;}
	case 'CompteRendu' :
		{include("controlleurs/c_compteRenduResponsable.php");break;}
	case 'voirActivite' :
		{include("controlleurs/c_activites.php");break;}

}
?>
