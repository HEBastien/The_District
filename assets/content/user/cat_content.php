<?php
    $cat=categorie ();

?>
<!-- Catégorie -->
<div class='row no-gutters p-5 justify-content-center'>  
    <?php foreach ($cat as $cat): ?>
    <div class='col-md-3 bg-light m-2'>
        <div class='row no-gutters'>
            <div class='col-md-5'>
               <img src="assets\images\category\<?=$cat->image ?>" alt="X" class='w-100'> 


            </div>
            <div class='col-md-7 text-center p-3'>
                <p><?=$cat->libelle ?></p>
                <a class="btn btn-dark" href="categoriespe.php?id=<?=$cat->id ?>" role="button">Voir la catégorie</a>
            </div>
        </div>
    </div> 
    <?php endforeach; ?>
</div>