<p class="display-6 text-center pt-5">S'inscrire</p>

<form action='assets/content/script/script_inscription.php' method='post'class='col-md-7 mx-auto m-5'>
<div class="mb-3">
    <label for="nom" class="form-label">Nom & Prénom</label>
    <input type="text" class="form-control" id="nom" name='nom'>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Adresse mail</label>
    <input type="email" class="form-control" id="email" name='email'>
  </div>
  <div class="mb-3">
    <label for="mdp" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="mdp" name='mdp'>
  </div>
  <button type="submit" class="btn btn-primary">S'inscrire</button>
</form>
<div class="col-md-7 mx-auto"><a href="login.php" class="text-end">Cliquez ici pour vous Connecter</a></div>