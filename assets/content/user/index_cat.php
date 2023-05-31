<?php
    $cat=indexcat ();
    $plat=indexplat ();
?>
<!-- Catégorie -->
<div class='row no-gutters m-5 justify-content-center'>  
    <?php foreach ($cat as $cat): ?>
    <div class='col-md-3 m-2 bg-light'>
        <div class='row no-gutters'>
            <div class='col-md-6'>
               <img src="assets\images\category\<?=$cat->image ?>" alt="" class='w-100'> 
            </div>
            <div class='col-md-6 text-center mt-5'>
                <p class="display-6"><?=$cat->libelle ?></p>
                <a class="btn btn-dark" href="categoriespe.php?id=<?=$cat->id ?>" role="button">Voir la catégorie</a>
            </div>
        </div>
    </div> 
    <?php endforeach; ?>
</div>
<!-- plats -->
<div class='row no-gutters m-3 justify-content-center'>  
    <?php foreach ($plat as $plat): ?>
    <div class='col-md-3 mx-2 bg-light'>
        <div class='row no-gutters'>
            <div class='col-md-5'>
               <img src="assets\images\food\<?=$plat->image ?>" alt="" class='w-100'> 


            </div>
            <div class='col-md-7 text-center mt-5'>
                <p><?=$plat->libelle ?></p>
                <a class="btn btn-dark" href="commande.php?id=<?=$plat->id ?>" role="button">Commander</a>
            </div>
        </div>
    </div> 
    <?php endforeach; ?>
</div>