<?php
    $id=get_id() ;
    $plat=commandeplat($id) ;
    $active=distinct_active();
    $categorie=all_categorie();
?> 

<div class="row no-gutters col-md-6 mx-auto m-3 mt-5">
    <div class="col-md-4">
      <img src="assets\images\food\<?=$plat->image ?>" alt="X" class='w-100'> 
    </div>
    <div class="col-md-8"> 
      <p><?=$plat->libelle ?></p>
      <p><?=$plat->description ?></p>
      <p><?=$plat->prix ?> €</p>
    </div>
  </div>
<form class="row col-md-8 g-3 m-3 mx-auto" action ="assets/content/script/script_update_plat.php" method="post" enctype="multipart/form-data">
    <div class="col-md-6">
    <div class="mb-2">
      <label for="libelle" class="form-label">Libelle</label>
      <input type="text" class="form-control" id="libelle" name="libelle" value="<?= $plat->libelle?>">
    </div>
  </div>
  <div class="col-md-6">
<label for="active" class="form-label">Active</label>
    <div class="mb-2">
    <select class="form-select" aria-label="active" name="active" id="active">
    <?php foreach ($active as $active): 
      if ($cat->active == $active->active){?>
      <option selected value="<?= $active->active ?>"><?= $active->active ?></option>
      <?php } else {?>
      <option value="<?= $active->active ?>"><?= $active->active ?></option>
    <?php } endforeach; ?>
    </select>
    </div>
  </div>
  <div class="col-md-6">
    <div class="mb-2">
      <label for="prix" class="form-label">Prix</label>
      <input type="text" class="form-control" id="prix" name="prix" value="<?= $plat->prix?>">
    </div>
  </div>
  <div class="col-md-6">
<label for="idcategorie" class="form-label">Categorie</label>
    <div class="mb-2">
    <select class="form-select" aria-label="idcategorie" name="idcategorie" id="idcategorie">
    <?php foreach ($categorie as $categorie): 
      if ($plat->id_categorie == $categorie->id){?>
        <option selected value="<?= $categorie->id ?>"><?= $categorie->libelle ?></option>
      <?php } else {?>
        <option value="<?= $categorie->id ?>"><?= $categorie->libelle ?></option>
    <?php } endforeach; ?>
    </select>
    </div>
  </div>
  <div class="mb-2">
  <label for="description" class="form-label">Description</label>
  <textarea class="form-control" id="description" name="description" rows="3"><?= $plat->description ?></textarea>
    </div>
    <div class="mb-2">
      <label for="image" class="form-label">Image</label>
      <input class="form-control" type="file" id="image" name="image">
    </div>
    <input class="form-control" type="text" id="id" name="id" value ="<?= $id ?>" hidden>
  <button type="submit" class="btn btn-dark">Modifier la Categorie</button>
</form>