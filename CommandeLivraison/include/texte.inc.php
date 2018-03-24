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

		case 2:	include("page/catalogue.inc.php");
			break;

		case 3:	include("page/commande.inc.php");
			break;
		case 4:	include("page/livraison.inc.php");
			break;

		case 5:	include("page/consulterFacture.inc.php");
			break;

		case 6:	include("page/reglerFacture.inc.php");
			break;

		case 7:	include("page/consulterPenalite.inc.php");
				break;

		case 8:	include("page/reglerPenalite.inc.php");
			break;

		case 9:	include("page/saisirReclamation.inc.php");
			break;
		case 10: include("page/afficherCommande.inc.php");
			break;

		default: include("page/accueil.inc.php");
    }
?>
