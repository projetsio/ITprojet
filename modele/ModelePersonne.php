<?php
include 'dbPDO.php';

class ModelePersonne{
  
  public static function connectPersonne($login,$mdp)
  {
    try
{

	$sql="SELECT * from eleve where login = '$login' and pswd = '$mdp'";
	$result = dbPdo::$pdo->query($sql);
	$liste = $result->fetchAll();
	foreach ($liste as $unePersonne)
	{
		$_SESSION['id']=$unePersonne[0];
		$_SESSION['log']=$unePersonne[1];
		$_SESSION['stat']=$unePersonne[5];
	}
	if(empty($liste))
	{
        $sql="SELECT * from conferencier where nom = '$login' and prenom = '$mdp'";
        $result = dbPDO::$pdo->query($sql);
        $liste = $result->fetchAll();
        foreach($liste as $unePersonne)
        {
    	   	$_SESSION['id']=$unePersonne[0];
        	$_SESSION['log']=$unePersonne[1];
        	$_SESSION['conferencier']="1";
        }      
	}

		} catch (PDOException $ex) 
		{
			
			echo $ex->getMessage();
			die('Probleme lors de la connexion a la BDD	');
			
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

	public static function GetConferencier()
	{
	try
		{
			$sql="SELECT* from conferencier";
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
}
  
?>
