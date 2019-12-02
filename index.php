<?php
session_start();
include("vues/entete.php");
include("vues/zonePle.php");
include("vues/piedPage.php");

if(isset($_GET['ctl']))
{
	$control = $_GET['ctl'];
	switch($control)
	{
		case 'personne':{
			include "controleur/ctlPersonne.php";
			break;
		}

		case 'conf':{
			include "controleur/ctlConf.php";
			break;
		}

		case 'admin':{
			include "controleur/ctlAdmin.php";
		}

	}	
}

?>