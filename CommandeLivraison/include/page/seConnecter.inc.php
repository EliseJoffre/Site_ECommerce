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
                            <li class="active"><a href="#">Se connecter</a></li>
                            <li><a href="#">Consulter catalogue</a></li>
                            <li><a href="#">Passer Commande</a></li>
                            <li><a href="#">Consulter Livraison</a></li>
                            <li><a href="#">Consulter Facture</a></li>
                            <li><a href="#">Régler facture</a></li>
                            <li><a href="#">Consulter Pénalités</a></li>
                            <li><a href="#">Régler Pénalités</a></li>
                            <li><a href="#">Saisir réclamations</a></li>
                            <li><a href="#">Régler Pénalités</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

<div class="container col-sm-offset-2 col-sm-7">
  <form action="index.php">
    <select class="form-control" id="listeConnexion">
      <option value='entreprise'>Entreprise </option>
      <option value='particulier'>particulier </option>
    </select>

    <div class="form-group">
      <label for="mail">Entrez votre adresse mail</label>
      <input type="email" class="form-control" id="mail" placeholder="Entrez votre email ici">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <button type="submit" class="btn btn-primary" id="bouton">Se connecter</button>
  </form>
</div>

    </div>
</div>