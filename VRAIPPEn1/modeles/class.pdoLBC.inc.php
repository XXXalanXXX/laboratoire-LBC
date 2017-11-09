<?php
class pdoLBC	
{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=db672809078';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $monpdoLBC = null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct()
	{
    		pdoLBC::$monPdo = new PDO(pdoLBC::$serveur.';'.pdoLBC::$bdd, pdoLBC::$user, pdoLBC::$mdp); 
			pdoLBC::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		pdoLBC::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 *
 * Appel : $instancePdoSalleCommunale = pdoLBC::getpdoLBC();
 * @return l'unique objet de la classe pdoLBC
 */
	public  static function getpdoLBC()
	{
		if(pdoLBC::$monpdoLBC == null)
		{
			pdoLBC::$monpdoLBC= new pdoLBC();
		}
		return pdoLBC::$monpdoLBC;  
	}



function connexion($login,$mdp){
		$req="SELECT * FROM visiteur ";
		$requete = PdoLBC::$monPdo->query($req);
		$lignes = $requete->fetchAll();

		$req="SELECT * FROM responsable ";
		$requete = PdoLBC::$monPdo->query($req);
		$responsables = $requete->fetchAll();

		foreach ($lignes as $ligne ) {
			if($login==$ligne['LOGINVISITEUR']&&$mdp==$ligne['MDPVISITEUR']){
				foreach ($responsables as $responsable) {
					if($ligne['MATRICULEVISITEUR']==$responsable['MATRICULEVISITEUR'])header('location:indexResponsable.php?uc=accueilResponsable&userid='.$ligne['MATRICULEVISITEUR'].'&recherche=aucune');
					else header('location:indexVisiteur.php?uc=accueilVisiteur&&userid='.$ligne['MATRICULEVISITEUR']);
				}
				
			}
			else{
				header('index.php?uc=formConnexion&action=connexion_b');
			}
		}
		
	}
//Simon//
 function getLesComptesRendus() 
{
	$req="SELECT * FROM RAPPORTVISITE";
	$res= PdoLBC::$monPdo->query($req);
	$lignes =$res->fetchAll();
	return $lignes;
}


function ajouterCompteRendu($numvisite, $matriculevisiteur, $numpraticien, $codespe, $datevisite, $motifvisite, $bilanvisite)
{
	$req2 = "INSERT INTO RAPPORTVISITE(numvisite,matriculevisiteur,numpraticien,codespe, datevisite, motifvisite, bilanvisite) VALUES ('$numvisite', '$matriculevisiteur', '$numpraticien', '$codespe', '$datevisite', '$motifvisite', '$bilanvisite')";
	PdoSalle::$monPdo->exec($req2);
}
}
?>