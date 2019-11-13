<?php
require_once  'dbPdo.php';

class ModeleConf extends dbPdo {
		public static function getLesConf() {
		try {
			
			$sql="SELECT * FROM conference";
			$result=dbPdo::$pdo->query($sql);
			$liste=$result->fetchAll();
			return $liste;
			
			}catch (PDOException $e) {
				echo $e->getMessage();
				die("Erreur dans la BDD");
			}
	}

	public static function GetConferencierByConference($id)
	{

	try
	{
		$sql="SELECT * from conferencier where id = '$id'";
		$result = dbPDO::$pdo->query($sql);
		$liste = $result->fetchAll();
		return $liste;
		
		}
		catch (PDOException $e)
		{
		echo $e->getMessage();
		die ("Erreur dans la BDD");
		}
	}
	
	public static function inscription($date,$idc,$ide){
		try{
			$sql="INSERT INTO reservation VALUES ($date,$idc,$ide)";
			$result=dpPDO::$pdo->exec($sql);
		}
		catch (PDOException $e){
			echo $e->getMessage();
			die ("Erreur dans la BDD");
		}
	}
		
}
?>
