<?php
	if (!empty($_GET["page"])) {
		$page=$_GET["page"];
	} else {
		$page=0;
	}
	switch ($page) {

		case 0:	include("page/accueil.inc.php");
			break;

		case 30: include("page/planification.inc.php");
			break;


		default: include("page/accueil.inc.php");
    }
?>