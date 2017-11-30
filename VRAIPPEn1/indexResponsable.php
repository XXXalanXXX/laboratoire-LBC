<<<<<<< .merge_file_a05588
<!--Simon-->
<?php
require_once("modeles/class.pdoLBc.inc.php");
include("vues/v_entete.php");
include("vues/v_bandeau_index.php");
=======
<?php
require_once("modele/class.pdoLBc.inc.php");
>>>>>>> .merge_file_a09496

if(!isset($_REQUEST['uc']))
     $uc = 'accueilResponsable';
else
	$uc = $_REQUEST['uc'];

$pdo = PdoLBc::getPdoLBc();	 
switch($uc)
{
	case 'accueilResponsable':
<<<<<<< .merge_file_a05588
		{include("vues/v_accueilResponsable.php");break;}
	case 'CompteRendu' :
		{include("controlleurs/c_compteRenduResponsable.php");break;}
	case 'voirActivite' :
		{include("controlleurs/c_activites.php");break;}
	case 'deconnexion':
		{include("controlleurs/c_deconnexion.php");break;}
=======
		{include("controleurs/c_voirResponsable.php");break;}
	case 'CompteRendu' :
		{include("controleurs/c_CompteRenduR.php");break;}
	case 'Somme' :
		{include("controleurs/c_voirSomme.php");break;}
	case 'voirActivite' :
		{include("controleurs/c_ActiviteR.php");break;}
	case 'inscrireResponsable':
		{include("controleurs/c_inscrireR.php");break;}
		{include("controleurs/c_inscrireR.php");break;}
>>>>>>> .merge_file_a09496

}
?>
