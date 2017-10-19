<?php
class pdoLBC	
{   		
      	private static $serveur='mysql:host=http://gr02.sio-cholet.fr/phpmyadmin';
      	private static $bdd='dbname=LBC';   		
      	private static $user='dbo672809078' ;    		
      	private static $mdp='BMw1234*' ;	
		private static $monPdo;
		private static $monpdoLBC = null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct()
	{
    		pdoLBC::$monPdo = new PDO(pdoLBC::$serveur.';'.PdoLBC::$bdd, pdoLBC::$user, pdoLBC::$mdp); 
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
}


function connexion($login,$mdp){
		$req="SELECT * FROM visiteur ";
		$requete = PdoLBC::$monPdo->query($req);
		$lignes = $requete->fetchAll();

		$req="SELECT * FROM responsable ";
		$requete = PdoLBC::$monPdo->query($req);
		$responsables = $requete->fetchAll();


		//
		foreach ($lignes as $ligne ) {
			if($login==$ligne['LOGIN']&&$mdp==$ligne['MDP']){
				foreach ($responasbles as $responsable) {
					if($ligne['id']==$responsable['id'])header('location:indexResponsable.php?uc=accueilResponsable&userid='.$ligne['ID'].'&recherche=aucune');
					else header('location:index.php?uc=accueilVisiteur&&userid='.$ligne['ID']);
				}
				
			}
			else{
				header('index.php?uc=formConnexion&action=connexion_b');
			}
		}
		
	}


?>