<?php
require_once  'dbPdo.php';

class ModelPersonne extends dbPdo {
	
	public static function connectPersonne($username, $pdw){
		try {
			$sql="SELECT* FROM user WHERE username = '$username' AND pdw = '$pdw'";
			$result=dbPdo::$pdo->query($sql);
			$liste = $result->fetchAll();
			foreach ($liste as $uneListe)
			{
				$_SESSION["login"] = $uneListe[0];
				$_SESSION["statut"] = $uneListe[2];
			}

		} catch (Exception $e) {
			echo $e->getMessage();
			die("Erreur dans la BDD");			
		}
	}
}

?>