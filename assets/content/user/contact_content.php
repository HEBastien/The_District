<form class="row g-3 col-md-10 m-4 mx-auto" action ="#" method="post">
  <div class="col-md-6">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom" required>
    <div id="nomobligatoire" class="form-text text-danger">Ce champs est obligatoire</div>
  </div>
  </div>
  <div class="col-md-6">
    <label for="prenom" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="prenom" name="prenom">
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="col-md-6">
    <label for="telephone" class="form-label">Téléphone</label>
    <input type="text" class="form-control" id="telephone" name="telephone" required>
    <div id="telobligatoire" class="form-text text-danger">Ce champs est obligatoire</div>
  </div>
    <div class="col-12">
    <label for="demande" class="form-label">Votre demande</label>
        <textarea class="form-control" id="demande" name="demande"></textarea>
    </div>
  <div class="col-12">
    <button type="submit" class="btn btn-dark">Envoyer</button>
  </div>
</form>