<?php
require_once'./modele/ModeleConf.php';

$action = $_GET['action'];
switch($action){
		case 'listerconf':{
			
			$listeConference = ModeleConf::getLesConf();
			include("./vues/conference/vueLesConference.php");
			break;
		}
		
		case 'inscription':{
			ModeleConf::inscription($_GET["date"],$_GET["conf"],$_GET["id"]);
			header("Location: index.php");
			break;
		}

		case 'appel':{
			include("./vues/conference/selectappel.php");
			break;
		}

		case 'fappel':{
			$eleve=ModeleConf::GetEleveByConference($_GET["id"]);
			include("./vues/conference/faireappel.php");
			break;
		}

		case 'desinscription':{
			ModeleConf::Desinscription($_SESSION["id"]);
			header("Location: index.php");
			break;
		}
	}
?>
