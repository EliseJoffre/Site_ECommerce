<?php
    session_start();
    $title = "Module de facturation";
    //$db = new MyPDO();
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title><?php echo $title ?></title>

    <link rel="stylesheet" type="text/css" href="/../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>

      h1,h2{
        margin-left: 500px;
      }

      #CoordEntreprise{
        display: inline-block;
      }
      #CoordClient{
        display: inline-block;
        margin-left: 500px;
      }

      .Titres{
        display: inline-block;
      }

      #tableauFacture{
        margin-top: 100px;
        margin-left: 500px;
      }

      #montant{
        margin-left: 815px;
      }

      #Bouton{
        margin-left: 670px;
      }

    </style>

</head>


<body>
    <div class="container">
