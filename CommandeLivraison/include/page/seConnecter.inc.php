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
                          <li class="active"><a href="index.php?page=1">Se connecter</a></li>
                          <li><a href="index.php?page=2">Consulter catalogue</a></li>
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

<div class="container col-sm-offset-2 col-sm-7">
  <form>
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
<div id="coucou">
</div>

    </div>
</div>
