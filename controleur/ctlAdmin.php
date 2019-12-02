<?php
require_once'./modele/ModelAdmin.php';

$action = $_GET['action'];
switch($action){
		case 'accueil':{
			include("vues/admin/vueaccueil.php");
			break;
		}

		case 'ajtconf':{
			include("vues/admin/ajtconference.php");
			break;
		}
	}
?>