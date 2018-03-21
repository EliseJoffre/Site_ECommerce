

<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <div class="sidebar-nav">
                <div class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="visible-xs navbar-brand">Sidebar menu</span>
                    </div>
                    <div class="navbar-collapse collapse sidebar-navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php?page=0">Accueil</a></li>

                            <li><a href="index.php?page=1">Se connecter</a></li>
                            <li class="active"><a href="index.php?page=2">Consulter catalogue</a></li>
                            <li><a href="index.php?page=3">Passer Commande</a></li>
                            <li><a href="index.php?page=4">Consulter Livraison</a></li>
                            <li><a href="index.php?page=5">Consulter Facture</a></li>
                            <li><a href="index.php?page=6">Régler facture</a></li>
                            <li><a href="index.php?page=7">Consulter Pénalités</a></li>
                            <li><a href="index.php?page=8">Régler Pénalités</a></li>
                            <li><a href="index.php?page=9">Saisir réclamations</a></li>

                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <center><h1> Catalogue </h1></center>

        <ul class="products" id="listeProduits">
        </ul>
        <div class="cart">
            <h1>Mon panier</h1>

                <table id="cartcontent" fitColumns="true" style="col-sm-offset-5 col-sm-2">
                    <thead>
                    <tr>
                        <th field="name" width=100>Produit</th>
                        <th field="quantity" width=60 align="right">Quantité</th>
                        <th field="price" width=80 align="right">Prix Unitaire</th>
                    </tr>
                    </thead>
                </table>

            <!--Double click sur quantité, devient input avec replaceWith et modifier quantite --->
            <center><h3 class="total">Total: 0€</h3></center>
            <h2>Glissez pour ajouter au panier</h2>
            <br><br>
            <center><button id="commander" type="button" class="btn btn-primary btn-lg">Commander</button>
            <button id="annuler" type="button" class="btn btn-secondary btn-lg">     Annuler     </button></center>
        </div>
      </div>
    </div>
