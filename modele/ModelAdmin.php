<?php
require_once  'dbPdo.php';

class ModelAdmin extends dbPdo {

	public static function ajtconf($titre,$idsalle,$theme,$idconf,$date){
		try{
			$sql="INSERT INTO conference (titre,idsalle,theme,idconferencier,dateconf) VALUES ('$titre','$idsalle','$theme','$idconf','$date')";
			$result=dbPdo::$pdo->exec($sql);
		}
		catch (PDOException $e){
			echo $e->getMessage();
			die ("Erreur dans la BDD");
		}
	}



} ?>