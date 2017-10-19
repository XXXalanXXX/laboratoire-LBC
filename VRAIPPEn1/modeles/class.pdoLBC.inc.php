<?php
class pdoLBC	
{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=LBC';   		
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
?>