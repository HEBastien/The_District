<?php
    $id=get_id() ;
    $plat=platcatspe($id) ;
    ?> 
<!-- plats -->
<div class='row no-gutters'>  
    <?php foreach ($plat as $plat): ?>
    <div class='col-md-4'>
        <div class='row no-gutters'>
            <div class='col-md-5'>
               <img src="assets\images\category\<?=$plat->image ?>" alt="X" class='w-50'> 


            </div>
            <div class='col-md-7'>
                <p><?=$plat->libelle ?></p>
                <a class="btn btn-primary" href="plat.php?id=<?=$plat->id ?>" role="button">Voir la catégorie</a>
            </div>
        </div>
    </div> 
    <?php endforeach; ?>
</div>