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
			ModeleConf::inscription($_GET["date"],$_GET["conf"],$_SESSION["id"]);
			header("Location: index.php");
			break;
		}
	}
?>
