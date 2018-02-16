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


		default: include("page/accueil.inc.php");
    }
?>