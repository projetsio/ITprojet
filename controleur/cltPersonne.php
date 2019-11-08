<?php
require_once './modele/ModelePersonne.php';
$action = $_GET['action'];

switch($action){

		case 'connection':{
			ModelePersonne::connectPersonne($_POST['login'], $_POST['mdp']);
			header("Location: index.php");
			break;
		}

		case 'deconnection':{
			include("vues/personne/vueDeco.php");
			break;
		}

		case 'conferencier':{
		$Conferencier = ModelePersonne::GetConferencier();
		include("vues/conferencier/vueLesConferenciers.php");
		break;
		}
}

?>
