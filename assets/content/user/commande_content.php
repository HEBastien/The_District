<?php
    $id=get_id() ;
    $plat=commandeplat($id) ;
?> 

<form class="row col-md-8 g-3 m-5 mx-auto" action ="assets/content/script/script_commande.php" method="post">
  <div class="row no-gutters col-md-8 mx-auto">
    <div class="col-md-4">
      <img src="assets\images\food\<?=$plat->image ?>" alt="X" class='w-100'> 
    </div>
    <div class="col-md-8"> 
      <p><?=$plat->libelle ?></p>
      <p><?=$plat->description ?></p>
      <p><?=$plat->prix ?> €</p>
      <br>
      <label for="quantite" class="form_label py-2">Quantité souhaité:</label>
      <select class="form-select" aria-label="quantite" id="quantite" name="quantite">
        <?php $i= 1;
        while ($i <=5) {
          if ($i==1){
            $selec = "selected"; 
          }
          else {
            $selec = "";          
          }
          echo "<option value='". $i ."' ". $selec .">". $i ."</option>";
          $i++;
      };?>
      </select>
    </div>
  </div>
  <div class="col-12">
    <label for="nomprenom" class="form-label">Nom & Prénom</label>
    <input type="text" class="form-control" id="nomprenom" name='nomprenom'>
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name='email'>
  </div>
  <div class="col-md-6">
    <label for="tel" class="form-label">Téléphone</label>
    <input class="form-control" id="tel" name='tel'>
  </div>
  <div class="col-12">
    <label for="adresse" class="form-label">Adresse</label>
    <input type="text" class="form-control" id="adresse" name='adresse'>
  </div>
  <input type="text" class="form-control" id="prix" name='prix' value="<?=$plat->prix ?>" hidden>
  <input type="text" class="form-control" id="idplat" name='idplat' value="<?= $id ?>" hidden>
  <div class="col-12">
    <button type="submit" class="btn btn-dark">Commander</button>
  </div>
</fOrm>