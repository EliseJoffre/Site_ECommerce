<?php
	if (!empty($_GET["page"])) {
		$page=$_GET["page"];
	} else {
		$page=0;
	}
	switch ($page) {

        //divers
		case 0:	include("page/accueil.inc.php");
			break;

		case 1:	include("page/seConnecter.inc.php");
			break;

		case 2:	include("page/coucou.inc.php");
			break;

		default: include("page/accueil.inc.php");
    }
?>
