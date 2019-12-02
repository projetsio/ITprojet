<?php
require_once  'dbPdo.php';

class ModeleConf extends dbPdo {
	public static function getLesConf() {
		try {			
			$sql="SELECT * FROM conference";
			$result=dbPdo::$pdo->query($sql);
			$liste=$result->fetchAll();
			return $liste;
		
			}
		catch (PDOException $e)
		{
			echo $e->getMessage();
			die("Erreur dans la BDD");
		}
	}

	public static function GetConferencierByConference($id){
		try{
			$sql="SELECT * from conferencier where id = '$id'";
			$result = dbPdo::$pdo->query($sql);
			$liste = $result->fetchAll();
			return $liste;
		
		}
		catch (PDOException $e)
		{
			echo $e->getMessage();
			die ("Erreur dans la BDD");
		}
	}

	public static function GetSalleByConference($id){
		try{
			$sql="SELECT * from salle where id = '$id'";
			$result = dbPdo::$pdo->query($sql);
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
			$sql="INSERT INTO reservation VALUES ('$date','$idc','$ide')";
			$result=dbPdo::$pdo->exec($sql);
		}
		catch (PDOException $e){
			echo $e->getMessage();
			die ("Erreur dans la BDD");
		}
	}

	public static function testinscription($id){
		try{
			$sql="SELECT * FROM reservation where ideleve='$id'";
			$result= dbPdo::$pdo->query($sql);
			$liste = $result->fetch();
			if(empty($liste)){
				return "vide";
			}else{
				return $liste;
			}
		}
		catch (PDOException $e)
		{
			echo $e->getMessage();
			die ("Erreur dans la BDD");
		}
	}

	public static function PlacesRestantes($id){
		try{
			$sql="SELECT COUNT(ideleve) FROM reservation where idconference='$id'";
			$result= dbPdo::$pdo->query($sql);
			$liste = $result->fetch();
			if(empty($liste)){
				return "vide";
			}else{
				return $liste;
			}
		}
		catch (PDOException $e)
		{
			echo $e->getMessage();
			die ("Erreur dans la BDD");
		}
	}

	public static function SelectAppel($id){
		try{
			$sql="SELECT * FROM conference WHERE idconferencier = '$id'";
			$result = dbPdo::$pdo->query($sql);
			$liste = $result->fetchAll();
			return $liste;
		}
		catch (PDOException $e)
		{
			echo $e->getMessage();
			die ("Erreur dans la BDD");
		}
	}

	public static function GetEleveByConference($id){
		try{
			$sql="SELECT ideleve FROM reservation WHERE idconference='$id'";
			$result = dbPdo::$pdo->query($sql);
			$liste = $result->fetchAll();
			return $liste;
		}
		catch (PDOException $e)
		{
			echo $e->getMessage();
			die ("Erreur dans la BDD");
		}
	}

	public static function GetEleveById($id){
		try{
			$sql="SELECT * FROM eleve WHERE id='$id'";
			$result = dbPdo::$pdo->query($sql);
			$liste = $result->fetch();
			return $liste;
		}
		catch (PDOException $e)
		{
			echo $e->getMessage();
			die ("Erreur dans la BDD");
		}
	}

	public static function Absence($ide,$idc){
		try{
			$sql="INSERT INTO absence VALUES ('$ide','$idc')";
			$result=dbPdo::$pdo->exec($sql);
		}
		catch (PDOException $e)
		{
			echo $e->getMessage();
			die ("Erreur dans la BDD");
		}
	}

	public static function Desinscription($id){
		try{
			$sql="DELETE FROM reservation WHERE ideleve='$id'";
			$result=dbPdo::$pdo->exec($sql);
		}
		catch (PDOException $e)
		{
			echo $e->getMessage();
			die ("Erreur dans la BDD");
		}
	}

}
?>