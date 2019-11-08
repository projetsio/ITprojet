<?php
require_once'./modele/ModeleConf.php';

$action = $_GET['action'];
switch($action){
		case 'listerconf':{
			
			$listeConference = ModeleConf::getLesConf();
			include("./vues/conference/vueLesConference.php");
			break;
		}
	}
?>