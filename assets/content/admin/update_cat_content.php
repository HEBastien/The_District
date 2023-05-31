<?php
    $id=get_id() ;
    $plat=platcatspe($id) ;
    $cat=update_show_categorie($id);
    $active=distinct_active();
?> 

<form class="col-10 mx-auto mt-3" action ="assets/content/script/script_update_category.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="libelle" class="form-label">Libelle</label>
      <input type="text" class="form-control" id="libelle" name="libelle" value="<?= $cat->libelle?>">
    </div>
    <label for="active" class="form-label">Active</label>
    <div class="mb-3">
    <select class="form-select" aria-label="active" name="active" id="active">
    <?php foreach ($active as $active): 
      if ($cat->active == $active->active){?>
      <option selected value="<?= $active->active ?>"><?= $active->active ?></option>
      <?php } else {?>
      <option value="<?= $active->active ?>"><?= $active->active ?></option>
    <?php } endforeach; ?>
    </select>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input class="form-control" type="file" id="image" name="image">
    </div>
    <input class="form-control" type="text" id="id" name="id" value ="<?= $id ?>" hidden>
  <button type="submit" class="btn btn-dark">Modifier la Categorie</button>
</form>

<!-- plats -->
<div class='row no-gutters m-5 justify-content-center'>  
    <?php foreach ($plat as $plat): ?>
    <div class='col-md-5 mx-2'>
        <div class='row no-gutters bg-light'>
            <div class='col-md-5'>
               <img src="assets\images\food\<?=$plat->image ?>" alt="X" class='w-100'> 


            </div>
            <div class='col-md-7 p-4 text-center mt-4'>
                <p><?=$plat->libelle ?></p>
                <p><?=$plat->description ?></p>
                <p><?=$plat->prix ?> €</p>
                <a class="btn btn-dark" href="update_plat.php?id=<?=$plat->id ?>" role="button">Modifier</a>
                <a class="btn btn-dark" href="#" role="button">Supprimer</a>
            </div>
        </div>
    </div> 
    <?php endforeach; ?>
</div>