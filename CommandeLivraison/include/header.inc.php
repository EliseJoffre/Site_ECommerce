<?php
    session_start();
    $title = "CommandeLivraison";
    //$db = new MyPDO();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title ?></title>

    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/catalogue.css">

    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
    <script src="js/seConnecter.js" type="text/javascript"></script>
    <script src="js/afficherCommande.js" type="text/javascript"></script>

    <script src="js/jquery.session.js" type="text/javascript"></script>


</head>


<body>
  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <ul class="nav navbar-nav">
          <li><a href="index.php?page=2">Consulter catalogue</a></li>
          <li><a href="index.php?page=3">Passer Commande</a></li>
          <li><a href="index.php?page=10">Afficher Commande</a></li>
          <li><a href="index.php?page=4">Consulter Livraison</a></li>
          <li><a href="index.php?page=5">Consulter Facture</a></li>
          <li><a href="index.php?page=6">Régler facture</a></li>
          <li><a href="index.php?page=7">Consulter Pénalités</a></li>
          <li><a href="index.php?page=8">Régler Pénalités</a></li>

        </ul>
        <form class="navbar-form navbar-right inline-form">
          <div class="form-group">
            <a href="index.php?page=1">Se connecter</a>

            <button id='deconnexion'>Se déconnecter </button>
          </div>
        </form>
      </div>
    </nav>

    <CENTER><h1>COOP' AGRI : La coopérative agricole</h1>
        </CENTER>
