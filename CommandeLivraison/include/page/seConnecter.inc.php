

<div class="container">
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
